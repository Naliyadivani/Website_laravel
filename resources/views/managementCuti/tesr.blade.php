<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Include Bootstrap Selectpicker CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<!-- Include Bootstrap Datepicker CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<!-- Your HTML code -->
<div class="form-group">
    <label for="nama_tipe_absen">Pilih Tipe Absen <span class="text-danger">*</span></label>
    <select class="form-control form-control-lg selectpicker" id="nama_tipe_absen" data-live-search="true" onchange="handleTipeAbsenChange(this)">
        <option selected value="">Pilih Tipe Absen</option>
    </select>
</div>

<div class="form-group">
    <label>Start Date <span class="text-danger"> *</span></label>
    <div class="input-group date" id="start_date" data-target-input="nearest">
        <input type="text" class="form-control form-control-lg datetimepicker-input" placeholder="Start date" name="start_date" id="start_date_tgl" data-target="#start_date" />
        <div class="input-group-append" data-target="#start_date" data-toggle="datetimepicker">
            <span class="input-group-text border-0">
                <i class="ki ki-calendar"></i>
            </span>
        </div>
    </div>
    <span class="form-text text-muted">Please enter start date.</span>
</div>

<script>
    function handleTipeAbsenChange(selectElement) {
        // Get the selected option
        var selectedOption = selectElement.options[selectElement.selectedIndex];

        // Get the data-max-absen attribute value
        var maxAbsen = selectedOption.getAttribute('data-max-absen');

        // Disable or enable the datepicker based on the condition
        var datepicker = $('#start_date_tgl');
        if (maxAbsen === null) {
            datepicker.prop('disabled', true).val('');
        } else {
            datepicker.prop('disabled', false);
        }
    }

    function getTipeAbsen(x) {
        $.ajax({
            type: "get",
            url: "http://10.9.12.150:9096/api/cuti/getAdminTipeAbsen?nik=" + x,
            success: function(response) {
                var arr = response.data;
                $('#nama_tipe_absen').html('');
                var tipeAbsen = '';
                var awal = '<option value="">Pilih Cuti</option>';
                $('#nama_tipe_absen').append(awal);

                arr.forEach((y, i) => {
                    tipeAbsen += <option value='${y.id_tipe_absen}' data-max-absen='${y.my_max_absen}'>${y.nama_tipe_absen}</option>;
                });

                $('#nama_tipe_absen').append(tipeAbsen);
                $('#nama_tipe_absen').selectpicker("refresh");

                // Trigger the change event to handle the initial state
                $('#nama_tipe_absen').trigger('change');
            }
        });
    }

    $(document).ready(function() {
        // Initialize Bootstrap Selectpicker
        $('.selectpicker').selectpicker();

        // Initialize Bootstrap Datepicker
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD',
        });
    });
</script>