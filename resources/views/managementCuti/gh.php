<!DOCTYPE html>
<html lang="en"  >

<head>
    <meta charset="utf-8" />

    
    <title> Approval Dashboard | PI-Smart</title>

    
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="qy5rcKIJsCy6lmomKGFN6mBRGmKVo3ZxeYzz0ats">

    
    <link rel="shortcut icon" href="https://pismart.pupuk-indonesia.com/public/media/logos/favicon.ico" />

    <link href="https://pismart.pupuk-indonesia.com/public/assets/css/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">

    
        <link href="https://pismart.pupuk-indonesia.com/public/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="https://pismart.pupuk-indonesia.com/public/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="https://pismart.pupuk-indonesia.com/public/css/style.bundle.css" rel="stylesheet" type="text/css" />
    
    
        <link href="https://pismart.pupuk-indonesia.com/public/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="https://pismart.pupuk-indonesia.com/public/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="https://pismart.pupuk-indonesia.com/public/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
        <link href="https://pismart.pupuk-indonesia.com/public/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    
    
    <style>
    .select-info {
        margin-left: 5px;
    }

    .card-information {
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        cursor: pointer;
    }

    .card-information:hover {
        transform: scale(0.94);
    }

    .card-information-active {
        transform: scale(0.94);
    }


    .card-waiting-approval {
        height: 150px;
        width: 100%;
        min-width: 320px;
        display: flex;
        flex-direction: row;
        background: linear-gradient(86deg, #FFF 24.3%, #FFEBCF 89.32%);
    }

    .card-history-approval {
        height: 150px;
        width: 100%;
        min-width: 320px;
        display: flex;
        flex-direction: row;
        background: linear-gradient(86deg, #FFF 24.3%, #CDE6FF 89.32%);
    }
</style>

        <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body  id="kt_body"   class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed page-loading"  id="body-web">
    <input type="hidden" name="token_oauth" id="token_oauth" value="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxMjQ4IiwianRpIjoiODU4MTY2MTJhNWVkNWRkNDNlZjc5MzhkZDdmNjBlNDgyZWNiYWZiMzM0NDQzNDk5ODI0NWM5YWQzMWQ4MmE3MjYzYzdmYjJiZWJlY2JlNmYiLCJpYXQiOjE2OTc0MjA4OTguNTMyMTksIm5iZiI6MTY5NzQyMDg5OC41MzIxOTIsImV4cCI6MTcyOTA0MzI5OC41MjU2NCwic3ViIjoiMTA4OCIsInNjb3BlcyI6W119.vbLnXbNWsZUXGDqn-QCzwjusBJ__gehpSPWK230ZnH_AVy1vn9D6PAAXfzyIVoT3pgq7shEMrqrDiQa5GRtxUajbV2niKWkuzyjWOG_67iMSwMgtvWZaBPJOthZ0o_Gf8d73eRjyiCkL9UPFFXmDE7Z_eIOn7tpZjQSto8Pn7Av03rBXtCxovu7xuCi25AN0eJdhKGsJ4qZl7n6nHU82QjaoMZBTw1HcwLShIFRUcdySzJJSAGyMa1gDg5P04LlYsQH-iU2DlkJ2VfenKPWCjUXnOhRPPeJP_4NUlF8_NtK81MRqpZpW8OJt3s0gfYOF3C-P3veDIv9LjqMbTKyzi4MVc-gYsQ-rGTvR9lAJKlJ0UwcjbqNK-c7EaleD5kUrsb2mwf35zk7ebPI65nrhYwekjWQDEnAnQCADdstYmW4emlZS4AtJbIhorxY4yDEOKlxilW-PJF3t3KIHO26sbLpa5FUMSsx6kJyatKsl1q30JDgnJB_imJ-03lStKsdZig6m5GyLpim07F9CNkkFIu807va9dFVfKy-7M8vfaBwZSCo6hhxm-1dfaPtONdNxPcktDVLxEipqJZIbAYQP5lLfgJe1mqv69R2R1dDrb5EpEaARIKpd7aAGY_ARI0Kyw3VH79dZItlcxOveyCHRbdj1-tM292WrgBImidhhEkU">

        <div class="page-loader">
        <div class="spinner spinner-primary"></div>
    </div>




    
    <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed " >
    <div class="mobile-logo">
        <a href="https://pismart.pupuk-indonesia.com">

            
            
                                                    
            
            
        </a>
    </div>
    <div class="d-flex align-items-center">

                    <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle"><span></span></button>
        
        
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
            <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:public/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
        </button>

    </div>
</div>

    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-row flex-column-fluid page">

                            <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">

    
    <div class="brand flex-column-auto " id="kt_brand">
        <div class="brand-logo">
            <a href="https://pismart.pupuk-indonesia.com">
                <img alt="PI-Smart" height="20" width="100" src="https://pismart.pupuk-indonesia.com/public/media/logos/logo-pismart-light.png"/>
            </a>
        </div>

                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <span class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:public/media/svg/icons/Navigation/Angle-double-left.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
    </g>
</svg><!--end::Svg Icon--></span>
            </button>
        
    </div>

    
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

        
        <div
            id="kt_aside_menu"
            class="aside-menu my-4 "
            data-menu-vertical="1"
             data-menu-scroll="1" data-menu-dropdown-timeout="500" >

            <ul class="menu-nav ">
                <li class="menu-section menu-section--first">
                <h4 class="menu-text">My Performance</h4>
                <i class="menu-icon flaticon-more-v2"></i>
            </li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/my_kpi" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">My KPI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/monitoring" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/General/Thunder-move.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/>
        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">My Progress</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/my_appraissal" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Files/File.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">My Appraissal</span></a></li><li class="menu-section ">
                <h4 class="menu-text">Managerial Menu</h4>
                <i class="menu-icon flaticon-more-v2"></i>
            </li><li class="menu-item  menu-item-active" aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/approval_v2" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Files/Folder.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Approval</span></a></li><li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
        <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Planning</span><i class="menu-arrow"></i></a><div class="menu-submenu "><span class="menu-arrow"></span><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Planning</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/unit/cascading_kpi/50000248" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Penyusunan KPI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/unit/cascading_monitoring" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Cascading Monitoring</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/approval_kpi_individu" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Approval KPI</span></a></li></ul></div></li><li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Monitoring</span><i class="menu-arrow"></i></a><div class="menu-submenu "><span class="menu-arrow"></span><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Monitoring</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/monitoring_coaching/dashboard" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Performance Coaching KPI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/monitoring_atasan/approval_kpi" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Timeline Monitoring KPI</span></a></li></ul></div></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/appraissal" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/General/Clipboard.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Appraissal</span></a></li><li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Report</span><i class="menu-arrow"></i></a><div class="menu-submenu "><span class="menu-arrow"></span><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Report</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/report_overall" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Report Appraissal + 360</span></a></li></ul></div></li><li class="menu-section ">
                <h4 class="menu-text">PIC Performance</h4>
                <i class="menu-icon flaticon-more-v2"></i>
            </li><li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Text/Bullet-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000"/>
        <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Planning</span><i class="menu-arrow"></i></a><div class="menu-submenu "><span class="menu-arrow"></span><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Planning</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/unit/cascading_kpi/main" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Penyusunan KPI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/unit/cascading_monitoring" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Cascading Monitoring</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/approval_kpi_individu" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Approval KPI</span></a></li></ul></div></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/monitoring" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/General/Search.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Monitoring</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="#" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/General/Clipboard.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Appraissal</span></a></li><li class="menu-item  menu-item-submenu" aria-haspopup="true"  data-menu-toggle="hover"><a  href="#" class="menu-link menu-toggle"><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Communication/Clipboard-list.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
        <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
        <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
        <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Report</span><i class="menu-arrow"></i></a><div class="menu-submenu "><span class="menu-arrow"></span><ul class="menu-subnav"><li class="menu-item  menu-item-parent" aria-haspopup="true" ><span class="menu-link"><span class="menu-text">Report</span></span></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/report_kpi" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Report KPI</span></a></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com/performance/report_apprasial" class="menu-link "><i class="menu-bullet menu-bullet-line"><span></span></i><span class="menu-text">Report Appraissal</span></a></li></ul></div></li><li class="menu-item " aria-haspopup="true" ><a  href="https://pismart.pupuk-indonesia.com" class="menu-link "><span class="svg-icon menu-icon "><!--begin::Svg Icon | path:public/media/svg/icons/Home/Home.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span><span class="menu-text">Back To Home</span></a></li>
            </ul>
        </div>
    </div>

</div>
            
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <div id="kt_header" class="header  header-fixed " >

    
    <div class="container-fluid d-flex align-items-center justify-content-between">
                    <div></div>
        
        <div class="topbar">

    
                        <div class="dropdown">
                
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        <span class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:public/media/svg/icons/Code/Compiling.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3"/>
        <path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
                    </div>
                </div>

                
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg shadow-lg">
                    <form>
    <!--begin::Header-->
    <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top py-5" style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
        <!--begin::Title-->
        <h4 class="d-flex flex-center rounded-top mb-5">
            <span class="text-white">Modul Aplikasi</span>
            <!-- <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span> -->
        </h4>
        <!--end::Title-->
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="tab-content">
        <!--begin::Tabpane-->
        <div class="tab-pane active show" id="topbar_notifications_notifications" role="tabpanel">
            <!--begin::Scroll-->
            <div class="navi navi-hover scroll" data-scroll="true" data-height="250" data-mobile-height="200">
                <!--begin::Item-->
                <a href="https://pismart.pupuk-indonesia.com/performance/my_kpi" class="navi-item">
                    <div class="navi-link d-flex align-items-center">
                        <div class="symbol symbol-40 mr-5 shadow-sm">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-danger">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File.svg-->
                                    <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/KPI4-22.svg" alt="Kpi" width="50px">
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <div class="navi-text">
                            <div class="text-dark-75 mb-1 font-size-lg">Performance Management System</div>
                            <div class="text-muted">Key Performance Indicator (KPI)</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="https://pismart.pupuk-indonesia.com/akhlak/my_akhlak" class="navi-item">
                    <div class="navi-link d-flex align-items-center">
                        <div class="symbol symbol-40 mr-5 shadow-sm">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Star.svg-->
                                    <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/AKHLAK-13.svg" alt="Kpi" width="50px">
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <div class="navi-text">
                            <div class="text-dark-75 mb-1 font-size-lg">AKHLAK</div>
                            <div class="text-muted">Penilaian AKHLAK Pegawai</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="https://pismart.pupuk-indonesia.com/administrasi" class="navi-item">
                    <div class="navi-link d-flex align-items-center">
                        <div class="symbol symbol-40 symbol-light-primary mr-5 shadow-sm">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-primary">
                                    <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Add-user.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
                                            <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <div class="navi-text">
                            <div class="text-dark-75 mb-1 font-size-lg">Administrasi</div>
                            <div class="text-muted">Administrasi Pegawai</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
                <!--begin::Item-->
                <a href="https://pismart.pupuk-indonesia.com/ldms" class="navi-item" target="_blank">
                    <div class="navi-link d-flex align-items-center">
                        <div class="symbol symbol-40 mr-5 shadow-sm">
                            <span class="symbol-label">
                                <span class="svg-icon svg-icon-lg svg-icon-info">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                    <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/DIKLAT-18.svg" alt="Kpi" width="50px">
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                        </div>
                        <div class="navi-text">
                            <div class="text-dark-75 mb-1 font-size-lg">LDMS</div>
                            <div class="text-muted">Aplikasi PI-LDMS</div>
                        </div>
                    </div>
                </a>
                <!--end::Item-->
            </div>
            <!--end::Scroll-->
            <!--begin::Action-->
            <div class="d-flex flex-center py-7">
                <a href="https://pismart.pupuk-indonesia.com/daftar_aplikasi" class="btn btn-light-primary font-weight-bold text-center">Lihat
                    Semua Aplikasi</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Tabpane-->
    </div>
    <!--end::Content-->
</form>                </div>
            </div>
            
    
                        <div class="dropdown">
                
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                        <i class="flaticon2-bell-5 text-primary"></i>
                        <span class="pulse-ring"></span>
                    </div>
                </div>

                
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <form>
                        <div class="d-flex flex-column pt-12 pb-5 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
    
    <h4 class="d-flex flex-center rounded-top">
        <span class="text-white">Notifikasi</span>
        <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2 jumlah-notif">1 Notifikasi Baru</span>
    </h4>

    
    <!-- <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-2x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
            <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_events"  >Events</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"  >Logs</a>
            </li>
        </ul> -->
</div>


<div class="tab-content">

    
    <div class="tab-pane  active show" id="topbar_notifications_events" role="tabpanel">
        
        <div class="navi navi-hover scroll my-4 notif-list" id="topbar-notif-container" data-scroll="true" data-height="300" data-mobile-height="250">
            


            
            


        </div>
    </div>

    
    <!--<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
        
        <div class="d-flex flex-center text-center text-muted min-h-200px">
            All caught up!
            <br/>
            No new notifications.
        </div>
    </div>-->
</div>
                    </form>
                </div>
            </div>
            
    
                        <div class="dropdown">
                
                <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                    <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Nendra Gunawan (1160081)</span>
                    </div>
                </div>

                
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                    <div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
        <div class="d-flex align-items-center mr-2">
            
            <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">Nendra Gunawan</div>
        </div>
        <span class="label label-success label-lg font-weight-bold label-inline">1160081</span>
    </div>


<div class="navi navi-spacer-x-0 pt-5">
    
    
    <div class="d-flex justify-content-center">
        <div class="symbol symbol-100 mr-5">
            <img alt="Pic" src="https://pismart.pupuk-indonesia.com/photoKaryawan/c0468491-f9af-4ab4-8d1b-9dc456fb7900"/>  
            <i class="symbol-badge bg-success"></i>
        </div>
        <div class="d-flex flex-column">
            <div href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Nendra Gunawan</div>
            <div class="navi mt-2">
                <div href="#" class="navi-item">
                    <span class="navi-link p-0 pb-2">
                        <span class="navi-icon mr-1">
                            <span class="svg-icon svg-icon-primary svg-icon-lg"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg><!--end::Svg Icon--></span>
                        </span>
                        <span class="navi-text text-muted text-hover-primary">1160081</span>
                    </span>
                </div>
                <a href="https://pismart.pupuk-indonesia.com/profile/personal" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">My Profile</a>
            </div>
        </div>
    </div>

    
    <div class="navi-separator mt-3"></div>
    <div class="navi-footer px-8 py-5">
        <a href="https://pismart.pupuk-indonesia.com/logout" class="btn btn-light-danger font-weight-bold btn-lg btn-block">Log Out</a>
    </div>
</div>
                </div>
            </div>
            </div>
    </div>
</div>

                <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

<div class="subheader py-2  subheader-solid " id="kt_subheader">
    <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <div class="d-flex align-items-center flex-wrap mr-1">
            <h5 class="text-dark font-weight-bold my-2 mr-5">
                Approval Dashboard
            </h5>
        </div>

		
        <div class="d-flex align-items-center">
            <div id="selectYear"></div>
        </div>
    </div>
</div>
                                            
<div class="d-flex flex-column-fluid">
        
    <div class="container-fluid">
        <input class="form-control" type="hidden" id="position_temp" name="position_temp" value="50000248" />
        <input class="form-control" type="hidden" id="nik_id" name="nik_id" value="1160081" />
        <input class="form-control" type="hidden" id="nik_login_user" name="nik_login_user" value="1160081" />
            <div class="d-flex flex-column-fluid" id="kt_content">
                <!--begin::Container-->
                <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 py-3 px-2 mx-0 mb-0">
                            <div class="card-waiting-approval shadow-sm row rounded-xl card-information mx-2" onclick="cardActive()">
                                <div class="col-8 ml-6 mr-0 mt-6 mb-0" style="height:30px">
                                    <span class="font-weight-bold font-size-h3-lg font-size-h2-md font-size-h2-sm font-size-h2 text-dark" style="white-space: nowrap;">Outstanding Approval</span>
                                </div>
                                <div class="col d-flex justify-content-end mx-2 mt-3 mb-0" style="height:30px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="25" viewBox="0 0 38 25" fill="none">
                                        <ellipse cx="2" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="2" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="2" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="19" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="19" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="19" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="36" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="36" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                        <ellipse cx="36" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                    </svg>
                                </div>
                                <div class="col-12 d-flex flex-row" style="height:65%">
                                    <div class="col-3 ml-3 d-flex align-items-center flex-row" style="width: 100%; display:relative; z-index: 1;">
                                        <img class="d-flex align-self-start pt-3" src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/waiting_icon.png" alt="Card image">
                                        <span class="font-weight-bolder text-waiting text-dark ml-3 d-flex align-self-start" style="font-size: 40px;">0</span>
                                    </div>
                                    <div class="col-9 row">
                                        <div class="col-12" style="height: 20px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="80" width="100%" viewBox="0 0 515 80" preserveAspectRatio="none" fill="none">
                                                <path d="M2 78.5841C40.5 37.7655 135.7 -30.9186 208.5 20.8938C299.5 85.6593 441.5 99.2655 513 27.969" stroke="url(#paint0_linear_4072_16248)" stroke-width="4" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_4072_16248" x1="257.5" y1="2.30319" x2="471.5" y2="96.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col-7 d-flex justify-content-center" style="width: 100%; height: 20px!important; display:relative; z-index: 1;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="25" viewBox="0 0 38 25" fill="none">
                                                <ellipse cx="2" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="2" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="2" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="19" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="19" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="19" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="36" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="36" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                <ellipse cx="36" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 py-3 px-2 mx-0 mb-0">
                            <div class="card-history-approval shadow-sm row card-information rounded-xl mx-2" onclick="cardActive(true)">
                                <div class="col-8 ml-6 mr-0 mt-6 mb-0" style="height:30px">
                                    <span class="font-weight-bold font-size-h3-lg font-size-h2-md font-size-h2-sm font-size-h2 text-dark" style="white-space: nowrap;">History Approval</span>
                                </div>
                                <div class="col d-flex justify-content-end mx-2 mt-3 mb-0" style="height:30px">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="22" viewBox="0 0 38 22" fill="none">
                                        <circle cx="2" cy="2" r="2" fill="#A0D0FF" />
                                        <circle cx="2" cy="11" r="2" fill="#A0D0FF" />
                                        <circle cx="2" cy="20" r="2" fill="#A0D0FF" />
                                        <circle cx="19" cy="2" r="2" fill="#A0D0FF" />
                                        <circle cx="19" cy="11" r="2" fill="#A0D0FF" />
                                        <circle cx="19" cy="20" r="2" fill="#A0D0FF" />
                                        <circle cx="36" cy="2" r="2" fill="#A0D0FF" />
                                        <circle cx="36" cy="11" r="2" fill="#A0D0FF" />
                                        <circle cx="36" cy="20" r="2" fill="#A0D0FF" />
                                    </svg>
                                </div>
                                <div class="col-12 d-flex flex-row" style="height:65%">
                                    <div class="col-3 ml-3 d-flex align-items-center flex-row" style="width: 100%; display:relative; z-index: 1;">
                                        <img class="d-flex align-self-start pt-3" src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/history_icon.png" alt="Card image">
                                    </div>
                                    <div class="col-9 row">
                                        <div class="col-12" style="height: 20px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="80" width="100%" viewBox="0 0 515 80" preserveAspectRatio="none" fill="none">
                                                <path d="M2 78.5841C40.5 37.7655 135.7 -30.9186 208.5 20.8938C299.5 85.6593 441.5 99.2655 513 27.969" stroke="url(#paint0_linear_4072_16248)" stroke-width="4" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_4072_16248" x1="257.5" y1="2.30319" x2="471.5" y2="96.5" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="col-7 d-flex justify-content-center" style="width: 100%; height: 20px!important; display:relative; z-index: 1;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="22" viewBox="0 0 38 22" fill="none">
                                                <circle cx="2" cy="2" r="2" fill="#A0D0FF" />
                                                <circle cx="2" cy="11" r="2" fill="#A0D0FF" />
                                                <circle cx="2" cy="20" r="2" fill="#A0D0FF" />
                                                <circle cx="19" cy="2" r="2" fill="#A0D0FF" />
                                                <circle cx="19" cy="11" r="2" fill="#A0D0FF" />
                                                <circle cx="19" cy="20" r="2" fill="#A0D0FF" />
                                                <circle cx="36" cy="2" r="2" fill="#A0D0FF" />
                                                <circle cx="36" cy="11" r="2" fill="#A0D0FF" />
                                                <circle cx="36" cy="20" r="2" fill="#A0D0FF" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="filter_detail">
                        <ul class="nav nav-pills mt-3" id="myTab" role="tablist">
                            <li class="card card-custom gutter-b mb-3 nav-item">
                                <a class="nav-link active" data-toggle="tab" id="null" onclick="filterCard()" href="#all_data" id="all_data">
                                    <span class="nav-text text-waiting font-weight-bolder mr-2">0</span>
                                    <span class="nav-text font-weight-bold">All Data</span>
                                </a>
                            </li>
                            <li class="card card-custom gutter-b mb-3 nav-item">
                                <a class="nav-link" data-toggle="tab" id="null" onclick="filterCard('individu')" href="#individu" id="individu">
                                    <span class="nav-text font-weight-bolder mr-2" id="text-kpi">0</span>
                                    <span class="nav-text font-weight-bold">KPI Individu</span>
                                </a>
                            </li>
                            <li class="card card-custom gutter-b mb-3 nav-item">
                                <a class="nav-link" id="appraissal" onclick="filterCard('appraissal')" data-toggle="tab" href="#appraissal" aria-controls="profile">
                                    <span class="nav-text font-weight-bolder mr-2" id="text-appraissal">0</span>
                                    <span class="nav-text font-weight-bold">Appraissal</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div id="card-kpi">
                    </div>
                    <!--end::Container-->
                </div>
    <script src="https://colorlib.com/etc/cs/comingsoon_04/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/features/miscellaneous/blockui.js" type="text/javascript"></script>
    <script>
        function modalEdit(id, tipe) {
            $('#page-titile').html('Edit KPI Individu');
            loadDataEditIndiAll(id, tipe);
            $('#addModalKpi').modal('show');
        }
    </script>

    <div class="modal fade px-0" id="addModalKpi" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="page-titile"></h5>
            </div>
            <div class="modal-body" id="modal-body">

                <form class="form" id="form_submit_kpi">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="my-5">
                                <input class="form-control" type="hidden" id="id_kpi" name="id_kpi" />
                                <input class="form-control" type="hidden" id="id_kpi_unit_parent" name="id_kpi_unit_parent" />
                                <input class="form-control" type="hidden" id="position" name="position" />
                                <input class="form-control" type="hidden" id="year" name="year" />
                                <input class="form-control" type="hidden" id="comp_code" name="comp_code" />

                                <input class="form-control" type="hidden" id="id_kpi_indi" name="id_kpi_indi" />
                                <input class="form-control" type="hidden" id="id_kpi_unit" name="id_kpi_unit" />
                                <input class="form-control" type="hidden" id="nik" name="nik" />
                                <input class="" type="hidden" id="tahun" name="tahun" />

                                <div class="form-group row form_kpi_unit_parent">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">KPI Superior</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <select class="form-control selectpicker id_kpi_unit_parent_temp" name="id_kpi_unit_parent_temp" id="id_kpi_unit_parent_temp"></select>
                                    </div>
                                </div>

                                <div class="form-group row form_position_select">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Position</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <!-- <select class="form-control selectpicker position_select" name="position_select" id="position_select"></select> -->
                                        <select class="form-control selectpicker position_select" name="position_select_array" id="position_select" data-actions-box="true" data-live-search="true" multiple></select>
                                    </div>
                                </div>

                                <div class="form-group row form_tipe_cascading">
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Tipe Cascading</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6" id='form_tipe_cascading'>
                                        <select class="form-control selectpicker disable-tipe-cascading" name="tipe_cascading" id="tipe_cascading"></select>
                                    </div>
                                </div>

                                <div class="form-group row no-indi">
                                    <label class="col-form-label text-right col-lg-2">Level</label>
                                    <div class="form-check mt-3 col-lg-6 ml-3">
                                        <div class="checkbox-inline">
                                            <label class="radio radio-success mr-3 radioLevel">
                                                <input type="radio" name="radioLevel" value="Kolegial" />
                                                <span></span>&nbsp;Kolegial</label>
                                            <label class="radio radio-success ml-3 mr-3 radioLevel">
                                                <input type="radio" name="radioLevel" value="Direktorat" />
                                                <span></span>&nbsp;Direktorat</label>
                                            <label class="radio radio-success ml-3 mr-3 radioLevel">
                                                <input type="radio" name="radioLevel" checked="checked" value="Kompartemen" />
                                                <span></span>&nbsp;Kompartemen</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2" style="line-height: 1;">
                                        <label class="text-right w-100 mt-1"> Perspektif</label>
                                        <label class="text-right w-100" id="label_pers" style="top: -23px;">
                                            BSC</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <!-- <label class="col-form-label text-right col-lg-2">Level</label> -->
                                            <div class="col-sm-12 p-kolegial" style="display: none">

                                                <div>
                                                    <select class="form-control hide_bsc" name="tipe_bumn" id="tipe_bumn"></select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 p-direktorat" style="display: none">

                                                <div>
                                                    <select class="form-control hide_bsc" name="tipe_direktorat" id="tipe_direktorat"></select>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 p-kompartement">

                                                <div>
                                                    <select class="form-control hide_bsc" name="tipe_bsc" id="tipe_bsc"></select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Nama</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <input class="form-control disable-form" type="text" id="kpi_title" name="kpi_title" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12"></label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="row">
                                            <div class="col-lg-2 mt-2">
                                                <label class="checkbox checkbox-success">
                                                    <input type="checkbox" name="Checkboxes5" id="sub_kpi_check" />
                                                    <span class="mr-2"></span> Sub KPI
                                                </label>
                                            </div>
                                            <div class="col-lg-10">
                                                <input class="form-control disable-form" type="text" id="sub_kpi" name="sub_kpi" placeholder="Sub KPI" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Definisi</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <textarea class="form-control disable-form" name="deskripsi" id="deskripsi" cols="50" rows="2"></textarea>
                                        <!-- <input class="form-control" type="text" name="deskripsi" id="deskripsi"/> -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Tujuan KPI</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <textarea class="form-control disable-form" name="tujuan" id="tujuan" cols="50" rows="2"></textarea>
                                        <!-- <input class="form-control" type="text" name="deskripsi" id="deskripsi"/> -->
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Tipe KPI</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <select class="form-control selectpicker disable-select" name="kategori" id="kategori"></select>
                                    </div>
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Bobot</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <div class="input-group">
                                            <input type="number" class="form-control text-right disable-form" name="bobot" id="bobot" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Formula
                                        Penilaian</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <!-- <textarea class="form-control disable-form" name="rumus" id="rumus" cols="50" rows="2"></textarea> -->
                                        <textarea class="form-control disable-form" cols="50" rows="2" id="kt_ck_edit"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Perlu Perhatian</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <div class="input-group">
                                            <input class="form-control disable-form" type="text" id="perlu_perhatian" name="perlu_perhatian" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="col-form-label text-right">Jenis Pengukuran</label>
                                                <div>
                                                    <select class="form-control selectpicker disable-select" name="tipe_target_bln" id="tipe_target_bln"></select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="col-form-label text-right">Frekuensi</label>
                                                <div>
                                                    <select class="form-control selectpicker disable-select" name="frequently" id="frequently"></select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label class="col-form-label text-right">Polaritas</label>
                                                <div>
                                                    <select class="form-control selectpicker disable-select" name="polaritas" id="polaritas"></select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-2"></div>
                                </div>

                                <!-- <div class="form-group row">
                                    
                                </div>

                                <div class="form-group row">
                                    
                                </div> -->
                                <!-- <div class="separator separator-dashed my-6"></div> -->
                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Target Bulanan</label>
                                    <div class="col-lg-2 col-md-9 col-sm-12 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Jan</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Januari" name="jan" id="jan" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Feb</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Februari" name="feb" id="feb" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Mar</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Maret" name="mar" id="mar" />
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-9 col-sm-12 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Apr</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target April" name="apr" id="apr" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Mei</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Mei" name="mei" id="mei" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Jun</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Juni" name="jun" id="jun" />
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-9 col-sm-12 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Jul</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Juli" name="jul" id="jul" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Agt</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Agustus" name="agt" id="agt" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Sep</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target September" name="sep" id="sep" />
                                        </div>
                                    </div>

                                    <div class="col-lg-2 col-md-9 col-sm-12 mb-2">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Okt</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Oktober" name="okt" id="okt" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nov</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target November" name="nov" id="nov" />
                                        </div>

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Des</span>
                                            </div>
                                            <input type="number" class="form-control disable-form-target" placeholder="Target Desember" name="des" id="des" />
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="separator separator-dashed my-6"></div> -->

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-6 target_tahunan_form">Target
                                        Tahunan</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6 target_tahunan_form">
                                        <div class="input-group">
                                            <input type="text" class="form-control text-right disable-form" placeholder="100%" name="target_tahunan" id="target_tahunan" disabled />
                                            <div class="input-group-append">
                                                <span class="input-group-text">Total</span>
                                            </div>
                                        </div>
                                    </div>

                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Satuan</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <input class="form-control disable-form" type="text" name="satuan" id="satuan" />
                                    </div>

                                </div>

                                <div class="form-group row time_based_date">
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Target Waktu</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <div class="input-group date" id="kt_datetimepicker_1" data-target-input="nearest">
                                            <input type="text" id="target_time_based" name="target_time_based" class="form-control datetimepicker-input" data-target="#kt_datetimepicker_1" />
                                            <div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datetimepicker">
                                                <span class="input-group-text">
                                                    <i class="ki ki-calendar"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-12">Sumber Data</label>
                                    <div class="col-lg-8 col-md-9 col-sm-12">
                                        <input class="form-control disable-form" type="text" id="sumber_data" name="sumber_data" />
                                    </div>
                                    <!-- <label class="col-form-label text-right col-lg-2 col-sm-6">Tujuan KPI</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <div class="input-group">
                                            <input class="form-control disable-form" type="text" id="tujuan" name="tujuan" />
                                        </div>
                                    </div> -->
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Unit Pemilik KPI</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <input class="form-control disable-form" type="text" id="kpi_pemilik" name="kpi_pemilik" />
                                    </div>
                                    <label class="col-form-label text-right col-lg-2 col-sm-6">Unit Pengelola
                                        KPI</label>
                                    <div class="col-lg-3 col-md-9 col-sm-6">
                                        <div class="input-group">
                                            <input class="form-control disable-form" type="text" id="kpi_pengelola" name="kpi_pengelola" />
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="form-group row">
                                    <label class="col-3">Grade Penilaian</label>
                                    <div class="col-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nilai 1</span>
                                            </div>
                                            <input type="text" class="form-control disable-form-grade" placeholder="0" id="nilai_1" id="nilai_1" name="nilai_1" />
                                        </div>
                                        <div style="padding:2px"></div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Nilai 2</span>
                                            </div>
                                            <input type="text" class="form-control disable-form-grade" placeholder="0" id="nilai_2" id="nilai_2" name="nilai_2" />
                                        </div>
                                        <div style="padding:2px"></div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text ">Nilai 3</span>
                                            </div>
                                            <input type="text" class="form-control disable-form-grade" placeholder="0" id="nilai_3" id="nilai_3" name="nilai_3" />
                                        </div>
                                        <div style="padding:2px"></div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text ">Nilai 4</span>
                                            </div>
                                            <input type="text" class="form-control disable-form-grade" placeholder="0" id="nilai_4" id="nilai_4" name="nilai_4" />
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!--<div class="separator separator-dashed my-10"></div>-->
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <!-- <button onClick="cobaCkEditor()" type="button" id="btn_close" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Test</button> -->
                <button type="button" onclick="submitkpi()" id="btn_submit" class="btn btn-primary mr-3">Simpan
                    KPI</button>
                
            </div>
        </div>
        <script src="https://pismart.pupuk-indonesia.com/public/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
        <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/crud/forms/editors/ckeditor-classic.js"></script>
        <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"></script>
        <script>
            // Demo 7
            $('#kt_datetimepicker_1').datetimepicker({
                useCurrent: false,
                format: 'YYYY-MM-DD'
            });
        </script>
        <script>
            var categoryReady = false;
            var cascadingReady = false;
            var targetBulananReady = false;
            var polaritasReady = false;
            var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
            var urlApi = base_url + 'api/kpi/store';

            $("#kpi_year").change(function() {
                year = $('#kpi_year').val();
            });

            var year = $('#kpi_year').val();

            function urlApiWeb(tipe = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                if (tipe != null) {
                    urlApi = base_url + 'api/kpi/individu/store';
                } else {
                    urlApi = base_url + 'api/kpi/store';
                }
            }

            function noIndiHide(tipe = null) {
                if (tipe != null) {
                    $('.form_tipe_cascading').hide();
                    $('.form_kpi_unit_parent').hide();
                    $('.form_position_select').hide();
                    $('.no-indi').hide();
                } else {
                    $('.form_tipe_cascading').show();
                    $('.form_kpi_unit_parent').show();
                    $('.form_position_select').show();
                    $('.no-indi').show();
                }
            }

            let ckEditor;
            ClassicEditor.create(document.querySelector('#kt_ck_edit'), {
                    // plugins: [ MathType ],
                    // toolbar: [ 'MathType', 'ChemType' ]
                })
                .then(editor => {
                    ckEditor = editor;
                })

            function loadDataCasecade() {
                clearAll();
                $('.position_select').prop('disabled', true);
                load_category();
                load_tipe_target_bulanan();
                load_polaritas();
                load_frequently();
                load_tipe_bsc();
                load_tipe_bumn();
                load_tipe_direktorat();
            }

            function loadDataAddIndi() {
                clearAll();
                noIndiHide('hide');
                load_category_indi();
                load_tipe_target_bulanan();
                load_polaritas();
                load_frequently();
                load_tipe_bsc();
                load_tipe_bumn();
                load_tipe_direktorat();
                urlApiWeb('indi');
            }

            function loadDataEditIndiAll(id, tipe) {
                if (tipe == 'detailModalCopyKpiUnit') {
                    clearAll();

                    $('#page-titile').html('Modal Detail KPI');
                    noIndiHide('hide');
                    $('#btn_submit').hide();

                    hideFormAll();
                    load_category_indi_all();
                    load_tipe_target_bulanan();
                    load_polaritas();
                    load_frequently();
                    load_tipe_bsc();
                    load_tipe_bumn();
                    load_tipe_direktorat();

                    loadExistDataUnit(id);
                } else if (tipe == 'detailIndi') {
                    clearAll();

                    $('#page-titile').html('Modal Detail KPI');
                    noIndiHide('hide');
                    $('#btn_submit').hide();

                    hideFormAll();

                    loadExistDataIndi(id);
                } else if (tipe != 'TASK' && tipe != 'TEKIN') {
                    clearAll();
                    noIndiHide('hide');
                    hideFormFully();

                    loadExistDataIndi(id);
                } else {
                    clearAll();
                    noIndiHide('hide');

                    loadExistDataIndi(id);
                }
                urlApiWeb(tipe);
            }

            function loadData() {
                clearAll();
                $('.position_select').prop('disabled', true);
                load_category();
                load_tipe_cascading();
                load_tipe_target_bulanan();
                load_polaritas();
                load_frequently();
                load_tipe_bsc();
                load_tipe_bumn();
                load_tipe_direktorat();
            }

            function clearAll() {
                noIndiHide();
                $('#id_kpi_unit_parent_temp').selectpicker('val', '');
                $('#id_kpi_unit_parent_temp').selectpicker('refresh');

                $('#id_kpi').val('');
                $('#id_kpi_indi').val('');
                $('#id_kpi_unit').val('');
                $('#kpi_title').val('');
                $('#deskripsi').val('');
                $('#bobot').val('');
                $('#satuan').val('');
                $('#rumus').val('');
                $('#jan').val('');
                $('#feb').val('');
                $('#mar').val('');
                $('#apr').val('');
                $('#mei').val('');
                $('#jun').val('');
                $('#jul').val('');
                $('#agt').val('');
                $('#sep').val('');
                $('#okt').val('');
                $('#nov').val('');
                $('#des').val('');
                $('#target_tahunan').val('');
                $('#nilai_1').val('');
                $('#nilai_2').val('');
                $('#nilai_3').val('');
                $('#nilai_4').val('');
                $('#year').val('');

                $('#sumber_data').val('');
                $('#perlu_perhatian').val('');

                $('#kpi_pemilik').val('');
                $('#kpi_pengelola').val('');

                $('#tujuan').val('');

                $('#sub_kpi').val('');
                $('#sub_kpi_check').prop('checked', false);

                showAllForm();

                $('#target_tahunan').prop('disabled', true);

                $('#tujuan').val('');

                ckEditor.setData('');

                urlApiWeb();
            }

            function hideFormFully() {
                $('.disable-select').prop('disabled', true);
                $('.disable-select').selectpicker('refresh');
                $('.disable-form').prop('disabled', true);
                $('.disable-form-target').prop('disabled', true);
                $('.disable-form-grade').prop('disabled', true);
                $('#bobot').prop('disabled', false);
                $('#position_select').prop('disabled', false);
            }

            function hideFormAll() {
                $('.disable-select').prop('disabled', true);
                $('.disable-select').selectpicker('refresh');
                $('.disable-form').prop('disabled', true);
                $('.disable-form-target').prop('disabled', true);
                $('.disable-form-grade').prop('disabled', true);
                $('#bobot').prop('disabled', true);
                $('#position_select').prop('disabled', false);
                $('#tipe_cascading').prop('disabled', false);
            }

            function hideFormPartial() {
                $('.disable-select').prop('disabled', true);
                $('.disable-select').selectpicker('refresh');
                $('.disable-form').prop('disabled', true);

                $('#kpi_title').prop('disabled', false);
                $('#deskripsi').prop('disabled', false);
                $('#sub_kpi').prop('disabled', false);

                $('#bobot').prop('disabled', false);
                $('#kpi_title').prop('disabled', false);
                $('#deskripsi').prop('disabled', false);
                $('#rumus').prop('disabled', false);
            }

            function showAllForm() {
                $('.disable-select').prop('disabled', false);
                $('.disable-select').selectpicker('refresh');
                $('.disable-form').prop('disabled', false);
                $('.disable-form-target').prop('disabled', false);
                $('.disable-form-grade').prop('disabled', false);
                $('#target_tahunan').prop('disabled', true);
            }

            function load_from_submit(position) {
                loadData();
                load_tipe_cascading('FULL');
                hideFormFully()
                $('#position').val(position);
                $("#comp_code").val($("#com_code_temp").val());
                $('.form_position_select').hide();
                $("#year").val($("#kpi_year").val());

                $('#addModalKpi').modal('show');
                $('#btn_submit').html('Cascade KPI');
                $('#page-titile').html('Cascade KPI ke Bawah');
            }

            var tempEdit = false;

            function load_all_view(id) {
                title = 'View KPI'
                loadExistData(id);
                tempEdit = true;
                $('#id_kpi').val(id);
                $('#page-titile').html(title);
                $('.disable-tipe-cascading').prop('disabled', true);
                $('.hide_bsc').prop('disabled', true);


                $('.form_tipe_cascading').hide();
                $('.form_kpi_unit_parent').hide();
                $('.form_position_select').hide();
                $("#position").val($("#position_temp").val());
                $("#comp_code").val($("#com_code_temp").val());
                $("#year").val($("#kpi_year").val());

                $('#btn_submit').hide();

                $('#addModalKpi').modal('show');
            }

            function load_all(id = null) {
                var title = 'Add KPI'

                if (id != null) {
                    title = 'Edit KPI'
                    loadExistData(id);
                    tempEdit = true;
                    $('#id_kpi').val(id);
                    $('#page-titile').html(title);
                } else {
                    loadData();
                    $('#page-titile').html(title);

                }

                $('.form_tipe_cascading').hide();
                $('.form_kpi_unit_parent').hide();
                $('.form_position_select').hide();
                $("#position").val($("#position_temp").val());
                $("#comp_code").val($("#com_code_temp").val());
                $("#year").val($("#kpi_year").val());
                $('#btn_submit').show();

                $('#addModalKpi').modal('show');
            }

            function load_from_cascade(id_parent, position_child, id = '', lock = null) {
                // load_tipe_cascading('FULL');
                if (id != '') {
                    loadExistData(id);
                } else {
                    loadExistData(id_parent, lock, null, id_parent);
                }

                $('#id_kpi').val(id);
                $('.form_kpi_unit_parent').hide();
                $('.form_position_select').hide();
                $('#position').val(position_child);
                $("#comp_code").val($("#com_code_temp").val());
                $('#id_kpi_unit_parent').val(id_parent);
                $('#page-titile').html('Cascade KPI ke Bawah');
                $('#addModalKpi').modal('show');
                $('#btn_submit').html('Cascade KPI')
            }

            function loadExistData(id, lock = null, cascade = null, parent = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $('#id_kpi_unit_parent').val(0);
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/show/' + id,
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#kt_content', {
                            overlayColor: '#000000',
                            state: 'primary',
                            message: 'Processing...'
                        });
                        // loadData()
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        var data = result.data.model;
                        showAllForm();
                        load_category(data.kpi_tipe);
                        load_tipe_cascading(data.cascading_tipe);
                        load_tipe_target_bulanan(data.target_bulanan_tipe);
                        load_polaritas(data.polaritas);
                        load_frequently(data.frequently);
                        load_tipe_bsc(data.bsc_tipe);
                        load_tipe_bumn(data.bumn_tipe);
                        load_tipe_direktorat(data.direktorat_tipe);

                        // console.log(tempEdit);


                        if (data.cascading_tipe == 'FULL') {
                            hideFormFully();
                            // $('#tipe_cascading').prop('disabled', false);
                        } else if (data.cascading_tipe == 'PART') {
                            hideFormPartial();
                            // $('#tipe_cascading').prop('disabled', false);
                        }


                        if (tempEdit == true) {
                            showAllForm();
                        }

                        if (lock != null) {
                            $(lock).prop('disabled', true);
                            $(lock).selectpicker('refresh');
                            load_tipe_cascading('CONT');
                        }

                        if (cascade == 'FULL') {
                            load_tipe_cascading('FULL');
                            hideFormFully();
                        }

                        if (data.id_kpi_unit_parent != 0) {
                            $('.form_tipe_cascading').show();
                            if (data.cascading_tipe == 'FULL') {
                                hideFormFully();
                            } else if (data.cascading_tipe == 'PART') {
                                hideFormPartial();
                            }

                            if (parent != null) {
                                $('#id_kpi_unit_parent').val(parent);
                                $('.disable-tipe-cascading').prop('disabled', false);
                            } else {
                                $('#id_kpi_unit_parent').val(data.id_kpi_unit_parent);
                            }

                        }

                        if (data.target_time_based != null) {
                            $('.time_based_date').show();
                            $('#target_time_based').val(data.target_time_based);
                        }

                        $('#kpi_title').val(data.kpi_title);
                        $('#deskripsi').val(data.kpi_desc);
                        $('#bobot').val(data.bobot);
                        $('#satuan').val(data.satuan);
                        ckEditor.setData(data.rumus_penilaian);
                        // $('#rumus').val(data.rumus_penilaian);
                        $('#jan').val(data.target_bln_1);
                        $('#feb').val(data.target_bln_2);
                        $('#mar').val(data.target_bln_3);
                        $('#apr').val(data.target_bln_4);
                        $('#mei').val(data.target_bln_5);
                        $('#jun').val(data.target_bln_6);
                        $('#jul').val(data.target_bln_7);
                        $('#agt').val(data.target_bln_8);
                        $('#sep').val(data.target_bln_9);
                        $('#okt').val(data.target_bln_10);
                        $('#nov').val(data.target_bln_11);
                        $('#des').val(data.target_bln_12);
                        $('#target_tahunan').val(data.target_tahunan);
                        $('#nilai_1').val(data.nilai1);
                        $('#nilai_2').val(data.nilai2);
                        $('#nilai_3').val(data.nilai3);
                        $('#nilai_4').val(data.nilai4);
                        $('#year').val(data.periode_thn);

                        $('#sumber_data').val(data.sumber_data);
                        $('#perlu_perhatian').val(data.perlu_perhatian);

                        $('#kpi_pemilik').val(data.kpi_pemilik);
                        $('#kpi_pengelola').val(data.kpi_pegelola);

                        $('#tujuan').val(data.tujuan);

                        if (data.sub_kpi != null && data.sub_kpi != '') {
                            $('#sub_kpi').show();
                            $('#sub_kpi_check').prop('checked', true);
                            $('#sub_kpi').val(data.sub_kpi);
                        } else {
                            $('#sub_kpi_check').prop('checked', false);
                            $('#sub_kpi').hide();
                            $('#sub_kpi').val('');
                        }

                        load_position_child(result.data.child)

                        KTApp.unblock('#kt_content');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/show/');
                    }
                });
            }

            function loadExistDataIndi(id) {
                console.log('masuk');
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/individu/show/' + id,
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        var data = result.data.model;

                        if (data.kpi_tipe == 'TASK' || data.kpi_tipe == 'TEKIN') {
                            load_category_indi(data.kpi_tipe);
                        } else {
                            load_category_indi_all(data.kpi_tipe);
                        }
                        load_tipe_cascading(data.cascading_tipe);
                        load_tipe_target_bulanan(data.target_bulanan_tipe);
                        load_polaritas(data.polaritas);
                        load_frequently(data.frequently);
                        load_tipe_bsc(data.bsc_tipe);

                        $('#id_kpi_indi').val(data.id_kpi_indi);
                        $('#id_kpi_unit').val(data.id_kpi_unit);
                        $('#kpi_title').val(data.kpi_title);
                        $('#deskripsi').val(data.kpi_desc);
                        $('#bobot').val(data.bobot);
                        $('#satuan').val(data.satuan);
                        $('#rumus').val(data.rumus_penilaian);
                        $('#jan').val(data.target_bln_1);
                        $('#feb').val(data.target_bln_2);
                        $('#mar').val(data.target_bln_3);
                        $('#apr').val(data.target_bln_4);
                        $('#mei').val(data.target_bln_5);
                        $('#jun').val(data.target_bln_6);
                        $('#jul').val(data.target_bln_7);
                        $('#agt').val(data.target_bln_8);
                        $('#sep').val(data.target_bln_9);
                        $('#okt').val(data.target_bln_10);
                        $('#nov').val(data.target_bln_11);
                        $('#des').val(data.target_bln_12);
                        $('#target_tahunan').val(data.target_tahunan);
                        $('#sumber_data').val(data.sumber_data);
                        $('#perlu_perhatian').val(data.perlu_perhatian);

                        $('#tipe_kategori').selectpicker('val', data.kpi_tipe);
                        $('#kategori').val(data.kpi_tipe);

                        $('#tipe_cascading').selectpicker('val', data.cascading_tipe);
                        $('#cascading').val(data.cascading_tipe);

                        $('#tipe_target_bln').selectpicker('val', data.target_bulanan_tipe);
                        $('#target_bln').val(data.target_bulanan_tipe);
                        if (data.target_bulanan_tipe == 'BASED') {
                            $('.time_based_date').show();
                            $('#target_time_based').val(data.target_time_based);
                        }

                        $('#tipe_polaritas').selectpicker('val', data.polaritas);
                        $('#polaritas').val(data.polaritas);

                        $('#tipe_bsc').selectpicker('val', data.bsc_tipe);
                        $('#bsc').val(data.bsc_tipe);

                        $('#frequently').selectpicker('val', data.frequently);
                        $('#frequently_input').val(data.frequently);

                        ckEditor.setData(data.rumus_penilaian);

                        $('#kpi_pemilik').val(data.kpi_pemilik);
                        $('#kpi_pengelola').val(data.kpi_pengelola);

                        $('#tujuan').val(data.tujuan);

                        if (data.sub_kpi != null && data.sub_kpi != '') {
                            $('#sub_kpi').show();
                            $('#sub_kpi_check').prop('checked', true);
                            $('#sub_kpi').val(data.sub_kpi);
                        } else {
                            $('#sub_kpi_check').prop('checked', false);
                            $('#sub_kpi').hide();
                            $('#sub_kpi').val('');
                        }

                        KTApp.unblock('#modal-body');

                    },
                    error: function(data) {
                        KTApp.unblock('#modal-body');
                        Swal.fire("Error", "Error Ketika Pengambilan Data KPI", "error");
                        handleUnauthorized(data, 'kpi/individu/show/')
                    }
                });
            }

            function loadExistDataUnit(id) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/show/' + id,
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        var data = result.data.model;

                        load_category_indi_all(data.kpi_tipe);
                        load_tipe_cascading(data.cascading_tipe);
                        load_tipe_target_bulanan(data.target_bulanan_tipe);
                        load_polaritas(data.polaritas);
                        load_frequently(data.frequently);
                        load_tipe_bsc(data.bsc_tipe);

                        $('#id_kpi_unit').val(data.id_kpi_unit);
                        $('#kpi_title').val(data.kpi_title);
                        $('#deskripsi').val(data.kpi_desc);
                        $('#bobot').val(data.bobot);
                        $('#satuan').val(data.satuan);
                        $('#rumus').val(data.rumus_penilaian);
                        $('#jan').val(data.target_bln_1);
                        $('#feb').val(data.target_bln_2);
                        $('#mar').val(data.target_bln_3);
                        $('#apr').val(data.target_bln_4);
                        $('#mei').val(data.target_bln_5);
                        $('#jun').val(data.target_bln_6);
                        $('#jul').val(data.target_bln_7);
                        $('#agt').val(data.target_bln_8);
                        $('#sep').val(data.target_bln_9);
                        $('#okt').val(data.target_bln_10);
                        $('#nov').val(data.target_bln_11);
                        $('#des').val(data.target_bln_12);
                        $('#target_tahunan').val(data.target_tahunan);
                        $('#sumber_data').val(data.sumber_data);
                        $('#perlu_perhatian').val(data.perlu_perhatian);

                        $('#tipe_kategori').selectpicker('val', data.kpi_tipe);
                        $('#kategori').val(data.kpi_tipe);

                        $('#tipe_cascading').selectpicker('val', data.cascading_tipe);
                        $('#cascading').val(data.cascading_tipe);

                        $('#tipe_target_bln').selectpicker('val', data.target_bulanan_tipe);
                        $('#target_bln').val(data.target_bulanan_tipe);

                        $('#tipe_polaritas').selectpicker('val', data.polaritas);
                        $('#polaritas').val(data.polaritas);

                        $('#tipe_bsc').selectpicker('val', data.bsc_tipe);
                        $('#bsc').val(data.bsc_tipe);

                        $('#frequently').selectpicker('val', data.frequently);
                        $('#frequently_input').val(data.frequently);

                        ckEditor.setData(data.rumus_penilaian);

                        $('#kpi_pemilik').val(data.kpi_pemilik);
                        $('#kpi_pengelola').val(data.kpi_pegelola);

                        $('#tujuan').val(data.tujuan);

                        if (data.sub_kpi != null && data.sub_kpi != '') {
                            $('#sub_kpi').show();
                            $('#sub_kpi_check').prop('checked', true);
                            $('#sub_kpi').val(data.sub_kpi);
                        } else {
                            $('#sub_kpi_check').prop('checked', false);
                            $('#sub_kpi').hide();
                            $('#sub_kpi').val('');
                        }

                        KTApp.unblock('#modal-body');

                    },
                    error: function(data) {
                        KTApp.unblock('#modal-body');
                        Swal.fire("Error", "Error Ketika Pengambilan Data KPI", "error");
                        handleUnauthorized(data, 'kpi/show');
                    }
                });
            }

            function submitkpi() {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                Swal.fire({
                    title: 'Simpan KPI ?',
                    text: "Jika ingin simpan KPI, Silahkan klik Simpan",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Simpan'
                }).then((result) => {
                    if (result.isConfirmed) {

                        $("#nik").val($("#nik_id").val());

                        $("#btn_submit").prop("disabled", true);
                        $("#btn_close").hide();
                        $("#btn_submit").html(
                            '<i class="spinner spinner-right spinner-white pr-10"></i> Submit Proses...');

                        var form = $("#form_submit_kpi");
                        var disabled = form.find(':input:disabled').removeAttr('disabled');


                        var data = form.serializeArray();

                        a = {
                            name: 'periode_kpi',
                            value: year
                        };
                        b = {
                            name: 'rumus',
                            value: ckEditor.getData()
                        };
                        c = {
                            name: 'inserted_by',
                            value: $("#username").val()
                        };
                        d = {
                            name: 'position_array',
                            value: $("#position_select").val()
                        };
                        data.push(a);
                        data.push(b);
                        data.push(c);
                        data.push(d);
                        // console.log(data);

                        if ($('#tipe_target_bln').val() == 'BASED' && $('#target_time_based').val() == '') {
                            $("#btn_submit").prop("disabled", false);
                            $("#btn_close").show();
                            $("#btn_submit").html('Submit KPI');
                            Swal.fire({
                                icon: 'error',
                                title: 'Submit Failed',
                                text: 'Target tanggal time based wajib diisi',
                                showCancelButton: true,
                                showConfirmButton: false,
                            })
                            return false;
                        }

                        $.ajax({
                            method: "POST",
                            type: "json",
                            url: urlApi,
                            data: data,
                            beforeSend: function(xhr) {
                                xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                            },
                            success: function(data) {
                                if (data.status == 200) {
                                    $(".modal-footer").hide();
                                    Swal.fire({
                                        title: 'Please Wait !',
                                        html: 'proses submit', // add html attribute if you want or remove
                                        allowOutsideClick: false,
                                        showCancelButton: false,
                                        showConfirmButton: false,
                                        onBeforeOpen: () => {
                                            Swal.showLoading()
                                        },
                                    })

                                    location.reload();
                                    form.trigger("reset");

                                } else {
                                    $("#btn_submit").prop("disabled", false);
                                    $("#btn_close").show();
                                    $("#btn_submit").html('Submit KPI');
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Submit Failed',
                                        text: data.field_,
                                        showCancelButton: true,
                                        showConfirmButton: false,
                                    })
                                }
                            },
                            error: function(data) {
                                handleUnauthorized(data, 'api/kpi/store');
                            }
                        });
                    }
                });
            }

            function load_category(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getCategory',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#kategori').empty();
                        var $kategori = $('#kategori');
                        $kategori.append('<option value="">-Pilih Kategori-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            if (value['kpi_tipe'] != 'TASK') {
                                $('#kategori').append('<option value=' + value['kpi_tipe'] + '>' + value[
                                    'kpi_tipe_desc'] + '</option>').selectpicker('refresh');
                            }
                        });

                        if (id != null) {
                            $('#kategori').selectpicker('val', id);
                            $('#kategori').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getCategory');
                    }
                });
            }

            function load_category_indi(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getCategoryAll',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#kategori').empty();
                        var $kategori = $('#kategori');
                        $kategori.append('<option value="">-Pilih Kategori-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            if (value['kpi_tipe'] == 'TASK' || value['kpi_tipe'] == 'TEKIN') {
                                $('#kategori').append('<option value=' + value['kpi_tipe'] + '>' + value[
                                    'kpi_tipe_desc'] + '</option>').selectpicker('refresh');
                            }
                        });

                        if (id != null) {
                            $('#kategori').selectpicker('val', id);
                            $('#kategori').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getCategoryAll');
                    }
                });
            }

            function load_category_indi_all(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getCategoryAll',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#kategori').empty();
                        var $kategori = $('#kategori');
                        $kategori.append('<option value="">-Pilih Kategori-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $('#kategori').append('<option value=' + value['kpi_tipe'] + '>' + value[
                                'kpi_tipe_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#kategori').selectpicker('val', id);
                            $('#kategori').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getCategoryAll');
                    }
                });
            }

            function load_tipe_cascading(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getTipe',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#tipe_cascading').empty();
                        var $tipe_cascading = $('#tipe_cascading');
                        $tipe_cascading.append('<option value="MAIN">-Pilih Tipe Cascading-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $('#tipe_cascading').append('<option value=' + value['cascading_tipe'] + '>' +
                                value['cascading_tipe_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#tipe_cascading').selectpicker('val', id);
                            $('#tipe_cascading').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'api/kpi/getTipe');
                    }
                });
            }

            function load_tipe_bsc(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getBsc',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#tipe_bsc').empty();
                        var $tipe_bsc = $('#tipe_bsc');
                        $tipe_bsc.append('<option value="">-Pilih Perspektif Kompartemen-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $('#tipe_bsc').append('<option value=' + value['kpi_bsc'] + '>' + value[
                                'kpi_bsc_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#tipe_bsc').selectpicker('val', id);
                            $('#tipe_bsc').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getBsc');
                    }
                });
            }

            function load_tipe_target_bulanan(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getTipeTargetBulan',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#tipe_target_bln').empty();
                        var $tipe_target_bln = $('#tipe_target_bln');
                        $tipe_target_bln.append('<option value="">-Pilih Tipe Target Bulanan-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $tipe_target_bln.append('<option value=' + value['target_bln_tipe'] + '>' +
                                value['target_bln_tipe_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#tipe_target_bln').selectpicker('val', id);
                            $('#tipe_target_bln').selectpicker('refresh');
                        }

                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getTipeTargetBulan');
                    }
                });
            }


            function load_polaritas(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getTipePolaritas',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#polaritas').empty();
                        var $polaritas = $('#polaritas');
                        $polaritas.append('<option value="">-Pilih Polaritas-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $polaritas.append('<option value=' + value['pol_tipe'] + '>' + value[
                                'pol_tipe_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#polaritas').selectpicker('val', id);
                            $('#polaritas').selectpicker('refresh');
                        }
                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getTipePolaritas');
                    }
                });
            }

            function load_frequently(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getFrequently',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#frequently').empty();
                        var $frequently = $('#frequently');
                        $frequently.append('<option value="">-Pilih Frekuensi-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $frequently.append('<option value=' + value['kpi_frequently'] + '>' + value[
                                'kpi_frequently_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#frequently').selectpicker('val', id);
                            $('#frequently').selectpicker('refresh');
                        }
                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getFrequently');
                    }
                });
            }

            function load_tipe_bumn(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getTipeBumn',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#tipe_bumn').empty();
                        var $tipe_bumn = $('#tipe_bumn');
                        $tipe_bumn.append('<option value="">-Pilih Perspektif BUMN-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $tipe_bumn.append('<option value=' + value['kpi_bumn'] + '>' + value[
                                'kpi_bumn_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#tipe_bumn').selectpicker('val', id);
                            $('#tipe_bumn').selectpicker('refresh');
                        }
                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getTipeBumn');
                    }
                });
            }

            function load_tipe_direktorat(id = null) {
                var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
                $.ajax({
                    type: 'GET',
                    url: base_url + 'api/kpi/getTipeDirektorat',
                    dataType: 'json',
                    beforeSend: function(xhr) {
                        KTApp.block('#modal-body', {
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Please wait...',
                            centerY: false,
                            centerX: false,
                            css: {
                                position: 'fixed',
                                margin: 'auto'
                            }
                        });
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                    },
                    success: function(result) {
                        $('#tipe_direktorat').empty();
                        var $tipe_direktorat = $('#tipe_direktorat');
                        $tipe_direktorat.append('<option value="">-Pilih Perspektif Direktorat-</option>');
                        var jsonData = JSON.parse(JSON.stringify(result));
                        $.each(jsonData.data, function(key, value) {
                            $tipe_direktorat.append('<option value=' + value['kpi_direktorat'] + '>' +
                                value['kpi_direktorat_desc'] + '</option>').selectpicker('refresh');
                        });

                        if (id != null) {
                            $('#tipe_direktorat').selectpicker('val', id);
                            $('#tipe_direktorat').selectpicker('refresh');
                        }
                        KTApp.unblock('#modal-body');
                    },
                    error: function(data) {
                        handleUnauthorized(data, 'kpi/getTipeDirektorat');
                    }
                });
            }

            function load_position_child(data) {
                $('#position_select').empty();
                var $position_select = $('#position_select');
                // $position_select.append('<option value=0>-Pilih Posisi-</option>');
                data.forEach(x => {
                    if (x.status == 'Not Cascaded') {
                        $('#position_select').append('<option value=' + x.id + '>' + x.id + ' - ' + x.pos_title +
                            ' - ' + x.employee_name + '</option>').selectpicker('refresh');
                    }
                });

                $('.position_select').prop('disabled', false);
            }

            $(".id_kpi_unit_parent_temp").change(function() {
                loadExistData(this.value, null, 'FULL', this.value);
                $("#comp_code").val($("#com_code_temp").val());
                $("#id_kpi_unit_parent").val(this.value);
            });

            $(".position_select").change(function() {
                $('#position').val(this.value);
            });

            $('.time_based_date').hide();
            $("#tipe_target_bln").change(function() {
                countTotalTarget();
                var value = $("#tipe_target_bln").val();
                $('.time_based_date').hide();
                if (value == 'BASED') {
                    $('.time_based_date').show();
                }
            });

            $('.disable-form-target').change(function() {
                countTotalTarget();
            });

            function countTotalTarget() {
                var count = 0;
                var total = 0;
                var lastValue = 0;
                var arrBln = ['#jan', '#feb', '#mar', '#apr', '#mei', '#jun', '#jul', '#agt', '#sep', '#okt', '#nov', '#des'];
                arrBln.forEach(x => {
                    if ($(x).val() != '') {
                        count += 1;
                        total += parseFloat($(x).val())
                        lastValue = $(x).val();
                    }
                });

                var tipe_target_bln = $("#tipe_target_bln").val();
                if (tipe_target_bln == 'RATA') {
                    total = parseFloat(total.toFixed(7));
                    total = parseFloat((total / count).toFixed(7));
                } else if (tipe_target_bln == 'PROG') { // diganti
                    total = lastValue;
                } else if (tipe_target_bln == 'BASED') {
                    total = lastValue;
                }

                if (isNaN(total) == false && count != 0) {
                    $('#target_tahunan').val(total);
                }
            }


            function loadfully() {
                Swal.fire({
                    title: 'Peringatan !!!',
                    text: "Data akan mengikuti parent kpi",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ubah'
                }).then((result) => {
                    if (result) {
                        var idParent = $('#id_kpi_unit_parent').val();
                        loadExistData(idParent, null, 'FULL', idParent)
                    }
                })
            }

            $('#tipe_cascading').change(function() {
                showAllForm();
                if (this.value == 'FULL') {
                    hideFormFully();
                    // loadfully();
                } else if (this.value == 'PART') {
                    hideFormPartial()
                }
                $('#tipe_cascading').prop('disabled', false);
            });

            $("#sub_kpi").hide();
            $("#sub_kpi_check").on('change', function() {
                if ($(this).is(':checked')) {
                    $("#sub_kpi").show();

                } else {
                    $("#sub_kpi").hide();
                    $('#sub_kpi').val('');
                    $(this).attr('value', 'false');
                }
            });


            $(".radioLevel").change(function() {
                var value = $('input[name="radioLevel"]:checked').val();
                if (value == "Direktorat") {
                    $('#label_pers').html('Direktorat')
                    $('.p-direktorat').show();
                    $('.p-kompartement').hide();
                    $('.p-kolegial').hide();
                } else if (value == "Kompartemen") {
                    $('#label_pers').html('BSC')
                    $('.p-direktorat').hide();
                    $('.p-kompartement').show();
                    $('.p-kolegial').hide();
                } else if (value == "Kolegial") {
                    $('#label_pers').html('BUMN')
                    $('.p-direktorat').hide();
                    $('.p-kompartement').hide();
                    $('.p-kolegial').show();
                }
                // console.log(value);
            });
        </script>            </div>
    </div>
                </div>

                <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
    
    <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
        
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted font-weight-bold mr-2">2023 &copy;</span>
            <a href="javascript:void();" class="text-dark-75 text-hover-primary">PI-Smart</a>
        </div>

        
        <div class="nav nav-dark order-1 order-md-2">
            <a href="https://pismart.pupuk-indonesia.com/panduan_pengguna"  class="nav-link pr-3 pl-0">Panduan Pengguna</a>
            <a href="https://pismart.pupuk-indonesia.com/kebijakan_privasi"  class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
            <!--<a href="https://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
            <a href="https://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>-->
        </div>
    </div>
</div>
            </div>
        </div>
    </div>



    
    
    
    
    
    
            <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
            <div class="card card-custom">
                
                <div class="card-header align-items-center px-4 py-3">
                    <div class="text-left flex-grow-1">
                        
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-lg"><!--begin::Svg Icon | path:public/media/svg/icons/Communication/Add-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-group"></i></span>
                                            <span class="navi-text">New Group</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="flaticon2-open-text-book"></i></span>
                                            <span class="navi-text">Contacts</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-rocket-1"></i></span>
                                            <span class="navi-text">Groups</span>
                                            <span class="navi-link-badge">
                                                <span class="label label-primary label-inline">new</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>
                                            <span class="navi-text">Calls</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-dashboard"></i></span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>

                                    <li class="navi-separator my-3"></li>

                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-protected"></i></span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>
                                            <span class="navi-text">Privacy</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="text-center flex-grow-1">
                        <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                        <div>
                            <span class="label label-dot label-success"></span>
                            <span class="font-weight-bold text-muted font-size-sm">Active</span>
                        </div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md"  data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>

                
                <div class="card-body">
                    
                    <div class="scroll scroll-pull" data-height="400" data-mobile-height="350">
                        
                        <div class="messages">
                            
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_12.jpg"/>
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">2 Hours</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                    How likely are you to recommend our company
                                    to your friends and family?
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">3 minutes</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_21.jpg"/>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                    Hey there, we’re just writing to let you know
                                    that you’ve been subscribed to a repository on GitHub.
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_21.jpg"/>
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                    Ok, Understood!
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_21.jpg"/>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                    You’ll receive notifications for all issues, pull requests!
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_12.jpg"/>
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                    You can unwatch this repository immediately by clicking here: <a href="#">https://github.com</a>
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_21.jpg"/>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                    Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_12.jpg"/>
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold text-left max-w-400px">
                                    Most purchased Business courses during this sale!
                                </div>
                            </div>

                            
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="https://pismart.pupuk-indonesia.com/public/media/users/300_21.jpg"/>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold text-right max-w-400px">
                                    Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="card-footer align-items-center">
                    
                    <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="mr-3">
                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1"><i class="flaticon2-photograph icon-lg"></i></a>
                            <a href="#" class="btn btn-clean btn-icon btn-md"><i class="flaticon2-photo-camera  icon-lg"></i></a>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon"><!--begin::Svg Icon | path:public/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
        <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg><!--end::Svg Icon--></span>
	
</div>


    
    <script>
        var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
    </script>

    
        <script src="https://pismart.pupuk-indonesia.com/public/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="https://pismart.pupuk-indonesia.com/public/plugins/custom/prismjs/prismjs.bundle.js" type="text/javascript"></script>
        <script src="https://pismart.pupuk-indonesia.com/public/js/scripts.bundle.js" type="text/javascript"></script>
        <!-- Sweet Alert -->
    <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/features/miscellaneous/sweetalert2.js"></script>
    <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/features/miscellaneous/blockui.js"></script>

    <script type="text/javascript">
        var browserDetail;
        async function initFingerPrint() {
            // Initialize an agent at application startup.
            const fpPromise = FingerprintJS.load()
            const fp = await fpPromise
            browserDetail = await fp.get().visitorId
            // Get the visitor identifier when you need it.
            /*fpPromise
            .then(fp => fp.get())
            .then(result => {
                // This is the visitor identifier:
                browserDetail = result.visitorId
            })*/
        }
    </script>

    <script src="//cdn.jsdelivr.net/npm/@fingerprintjs/fingerprintjs@3/dist/fp.min.js" onload="initFingerPrint()"></script>

    <script>
        var base_url = 'https://pismart.pupuk-indonesia.com';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-92MQ95R722"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-92MQ95R722');
    </script>

    <script>
        // get list notification
        $.ajax({
            url: base_url + '/notification/getlist',
            method: 'post',
            dataType: 'json',
            success: function(data) {

            },
            error: function(jxhr) {
                console.log(jxhr);

                //doing something make empty the list notificatoin
                $('#topbar-notif-container').html(
                    `
                        <div class="d-flex flex-center text-center text-muted min-h-200px">
                            All caught up!
                            <br/>
                            Tidak ada Notifikasi Baru
                        </div>
                    `);
                // handleUnauthorized(jxhr.status, jxhr);
            }
        })
    </script>

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-messaging.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->
    <!-- <script src="https://www.gstatic.com/firebasejs/8.8.0/firebase-analytics.js"></script> -->

    <script src="https://pismart.pupuk-indonesia.com/public/assets/js/pages/features/miscellaneous/bootstrap-notify.js"></script>
    <script src="https://pismart.pupuk-indonesia.com/public/plugins/global/ion.sound-3.0.7/ion.sound.min.js"></script>

    <script>
        var token_oauth = $('#token_oauth').val();
        // console.log(token_oauth);
    </script>

    <script>
        //initilize sound plugins and load sound
        ion.sound({
            sounds: [{
                name: "bell_ring"
            }],
            volume: 1.0,
            path: "public/plugins/global/ion.sound-3.0.7/sounds/",
            preload: false
        });
    </script>

    <script src="https://pismart.pupuk-indonesia.com/public/js/firebase.js"></script>
    <script>
        function handleUnauthorized(res, endpoint = null) {
            var base_url = 'https://pismart.pupuk-indonesia.com/';
            var user_login = '1160081';

            if (res.status != 404 || res.status != 400) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: base_url + 'log_ajax',
                    type: "POST",
                    data: {
                        "status_code": res.status,
                        "content": res.responseText ? res.responseText : 'Connection Timeout',
                        "user": user_login,
                        "endpoint": endpoint ? endpoint : 'undefined',
                    },
                    success: function(response) {}
                });
            }

            if (res.status == 401) {
                Swal.fire({
                    title: res.status,
                    text: res.responseText ? res.responseText : 'Token Expired',
                    icon: "info",
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: true,
                }).then(function() {
                    window.location.href = "https://pismart.pupuk-indonesia.com/logout";
                })
            }
        }

        function PersentaseFunc(realisasi, target, polaritas, existData = null) {

            var persentase = 0;

            if (polaritas == "MIN" ||  polaritas == "STA") {
                if (target == 0 && realisasi == 0) {
                    target = 1.1;
                    realisasi = 1;
                }else if (target > 0 && realisasi == 0 && existData == 1) {
                    target = 1.1;
                    realisasi = 1;
                } else if (target == 0) {
                    target = 3;
                }

                persentase = (parseFloat(target) / parseFloat(realisasi) * 100).toFixed(2);
                if (persentase == Infinity) {
                    persentase = 0;
                }

            } else {
                persentase = (parseFloat(realisasi) / parseFloat(target) * 100).toFixed(2);
            }
            return persentase;
        }
        //global year variable
        var current_year = new Date().getFullYear();
        selectYear(current_year)
        selectBatch()
        getListNotif();
      

        function selectYear(year) {
            var start_year = new Date();
            start_year.setFullYear(year - 1)
            var html =
                '<select class="form-control selectpicker" id="kpi_year" data-style="btn-primary">' +
                '<optgroup label="Periode Tahun" id="listYear">' +
                '</optgroup>' +
                '</select>'
            $('#selectYear').html(html)
            var get_year = start_year.getFullYear();
            for (let i = 0; i < 3; i++) {
                if (get_year == (current_year)) {
                    $('#listYear').append($("<option></option>").attr({
                        value: get_year,
                        selected: 'selected'
                    }).text('Periode thn ' + get_year));
                } else {
                    $('#listYear').append($("<option></option>").attr('value', get_year).text('Periode thn ' +
                        get_year));
                }
                get_year++
            }
            $('kpi_year').selectpicker('refresh')
        }
        function selectBatch() {
            var html =
                        '<select class="form-control selectpicker" id="kpi_batch">' +
                        '<optgroup label="Periode Batch" id="listBatch">' +
                        '</optgroup>' +
                        '</select>'
                    $('#selectBatch').html(html)
            $.ajax({
                type: "GET",
                url: '/survey_three_sixty_internship/getBatchInternship/',
                dataType: 'json',
                cache: false,
                async: false,
                success: function(res) {
                    var arr = res.data
                    if (arr.length > 0) {
                        arr.forEach((x, i) => {
                            if (i + 1 == arr.length) {
                                $('#listBatch').append($("<option></option>").attr({
                                    value: `${x.batch}`,
                                    selected: 'selected'
                                }).text(`${x.batch}`));
                                batch = x.batch
                            }else{
                                $('#listBatch').append($("<option></option>").attr('value', `${x.batch}`).text(`${x.batch}`));
                            }
                        })
                        $('#kpi_batch').selectpicker('refresh')
                    }
                }
            })
        }

        function formatRupiah(angka, prefix) {
            if (angka == 0.00) {
                return 0;
            }
            var number_string = angka.replace(/[^.\d]/g, '').toString(),
                split = number_string.split('.'),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? ',' : '';
                rupiah += separator + ribuan.join(',');
            }

            rupiah = split[1] != undefined ? rupiah + '.' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        }

        function getListNotif() {
            var user_login = '1160081';
            var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
            $.ajax({
                url: base_url + 'api/notifWeb/get/' + user_login,
                type: "GET",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {
                    arr = response.data;
                    html = '';
                    jumlahNotRead = 0;
                    arr.forEach(x => {
                        if (x.read_at == null) {
                            jumlahNotRead++;
                        }
                        html = `<a href="#" class="navi-item">
                                <div class="navi-link">
                                    <div class="navi-icon mr-3">
                                        <img widht="30px" height="30px" class="rounded" src="${x.from.photo}" />
                                    </div>
                                    <div class="navi-text">
                                        <div class="font-weight-bold">
                                            ${x.notifikasi_text}
                                        </div>
                                        <div class="text-muted">
                                            ${x.range_time}
                                        </div>
                                    </div>
                                </div>
                            </a>`;
                        $('.notif-list').append(html);
                    });
                    $('.jumlah-notif').html(jumlahNotRead + ' Belum dibaca');
                }
            });
        }

        function totalUsulanNeedApv(nik) {          
            var base_url_api = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
              
            $.ajax({
                url: base_url_api + 'api/rmp/approve/getData',
                type: "POST",
                data: {
                    nik: nik,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {

                    var arr = result.data
                    var jumlah = 0;
                    if (arr.length > 0) {
                        arr.forEach((x, i) => {
                            jumlah++;
                        });

                        $('#label_id_wait_apv').html(jumlah);
                        $('#label_id_wait_apv_sub').html(jumlah);
                    }
                },
                error: function(data) {
                    handleUnauthorized(data);
                }
            })
        }

        function totalUsulanNeedVerif() {
            $.ajax({
                url: base_url_api + 'api/rmp/admin/getDataVerifAdmin',
                type: "POST",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {
                    var hitungWait = 0;

                    var arr = result.data

                    if (arr.length > 0) {
                        arr.forEach((x, i) => {
                            if (x.status_pengajuan.code == 'WaitVerifSdm') {
                                hitungWait++
                            }
                        });
                    }

                    $('#label_id_wait_verif').html(hitungWait);
                },
                error: function(data) {
                    handleUnauthorized(data);
                }
            })
        }
    </script>


    
        <!-- <script src="https://colorlib.com/etc/cs/comingsoon_04/vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" data-turbolinks-track="true"></script>
    <script src="https://pismart.pupuk-indonesia.com/public/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    

    <script>
        var base_url_web = 'https://pismart.pupuk-indonesia.com/';
        var base_url = 'https://api-pismart.pupuk-indonesia.com/oauth_api/';
        var token_oauth = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxMjQ4IiwianRpIjoiODU4MTY2MTJhNWVkNWRkNDNlZjc5MzhkZDdmNjBlNDgyZWNiYWZiMzM0NDQzNDk5ODI0NWM5YWQzMWQ4MmE3MjYzYzdmYjJiZWJlY2JlNmYiLCJpYXQiOjE2OTc0MjA4OTguNTMyMTksIm5iZiI6MTY5NzQyMDg5OC41MzIxOTIsImV4cCI6MTcyOTA0MzI5OC41MjU2NCwic3ViIjoiMTA4OCIsInNjb3BlcyI6W119.vbLnXbNWsZUXGDqn-QCzwjusBJ__gehpSPWK230ZnH_AVy1vn9D6PAAXfzyIVoT3pgq7shEMrqrDiQa5GRtxUajbV2niKWkuzyjWOG_67iMSwMgtvWZaBPJOthZ0o_Gf8d73eRjyiCkL9UPFFXmDE7Z_eIOn7tpZjQSto8Pn7Av03rBXtCxovu7xuCi25AN0eJdhKGsJ4qZl7n6nHU82QjaoMZBTw1HcwLShIFRUcdySzJJSAGyMa1gDg5P04LlYsQH-iU2DlkJ2VfenKPWCjUXnOhRPPeJP_4NUlF8_NtK81MRqpZpW8OJt3s0gfYOF3C-P3veDIv9LjqMbTKyzi4MVc-gYsQ-rGTvR9lAJKlJ0UwcjbqNK-c7EaleD5kUrsb2mwf35zk7ebPI65nrhYwekjWQDEnAnQCADdstYmW4emlZS4AtJbIhorxY4yDEOKlxilW-PJF3t3KIHO26sbLpa5FUMSsx6kJyatKsl1q30JDgnJB_imJ-03lStKsdZig6m5GyLpim07F9CNkkFIu807va9dFVfKy-7M8vfaBwZSCo6hhxm-1dfaPtONdNxPcktDVLxEipqJZIbAYQP5lLfgJe1mqv69R2R1dDrb5EpEaARIKpd7aAGY_ARI0Kyw3VH79dZItlcxOveyCHRbdj1-tM292WrgBImidhhEkU';
        var position = $('#position_temp').val();
        var year = $('#kpi_year').val();
        var nik = $('#nik_id').val();

        $("#kpi_year").change(function() {
            year = $('#kpi_year').val();
            cardActive()
        });

        cardActive()

        function cardActive(history = false) {
            countWaitingApproval()
            $('#filter_detail').hide();
            if (history == false) {
                handleData(history);
                $('.card-waiting-approval').addClass('card-information-active')
                $('.card-history-approval').removeClass('card-information-active')
                $('#filter_detail').show();
            } else {
                handleData(history);
                $('.card-waiting-approval').removeClass('card-information-active')
                $('.card-history-approval').addClass('card-information-active')
            }
        }

        function countWaitingApproval() {
            $.ajax({
                url: base_url + 'api/kpi/approval/countPendingApproval',
                type: "POST",
                data: {
                    nik: nik,
                    position: position,
                    year: year
                },
                beforeSend: function(xhr) {
                    KTApp.block('#kt_content', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...',
                        centerY: false,
                        centerX: false,
                        css: {
                            position: 'fixed',
                            margin: 'auto'
                        }
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {
                    var res = result.data
                    $('.text-waiting').text(res.total_pending)
                    $('#text-kpi').text(res.total_pending_kpi_indi)
                    $('#text-appraissal').text(res.total_pending_appraissal)
                    KTApp.unblock('#kt_content');
                },
                error: function(data) {
                    KTApp.unblock('#kt_content');
                    Swal.fire(
                        'Gagal!',
                        data['responseJSON']['ResponseString'],
                        'error'
                    )
                    handleUnauthorized(data);
                }
            })
        }

        function handleData(history = false) {
            $('#card-kpi').html('');
            getDataKpiAll(history);
            getDataAppraissalAll(history);
        }

        function filterCard(tipe = null) {
            if (tipe == 'appraissal') {
                $('.kpi-individu-card').hide()
                $('.appraissal-card').show()
            } else if (tipe == 'individu') {
                $('.kpi-individu-card').show()
                $('.appraissal-card').hide()
            } else {
                $('.kpi-individu-card').show()
                $('.appraissal-card').show()
            }
            $('.not-waiting-card').hide();
        }

        function getDataKpiAll(history = false) {
            $.ajax({
                type: 'POST',
                url: base_url + 'api/kpi/approval/getDataChild',
                data: {
                    position: position,
                    nik: nik,
                    year: year
                },
                beforeSend: function(xhr) {
                    KTApp.block('#kt_content', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...'
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                },
                success: function(result) {
                    var count = 0;
                    var nik_login_user = $('#nik_login_user').val();

                    var arr = result.data;

                    arr.forEach(x => {
                        if (x.m_karyawan != null) {
                            var kondisi = '';
                            var status_badge = '';
                            var status_card = 'not-waiting-card';
                            if (x.status.status_tipe == 'WaitApv') {
                                status_card = 'waiting-card'
                                kondisi = '<th colspan="6" class="text-right border-0" id="action' + x
                                    .nik +
                                    '">' +
                                    '<button type="button" class="btn btn-light-danger font-weight-bold mr-3" onClick="declineFunction(' +
                                    x.nik + ',' + nik_login_user + ',' + x.periode_thn + ',' + x
                                    .position + ')">Tolak KPI Individu</button>' +
                                    '<button type="button" class="btn btn-light-primary font-weight-bold mt-2 mt-md-0" onClick="submitFunction(' +
                                    x.nik + ',' + nik_login_user + ',' + x.periode_thn + ',' + x
                                    .position + ')">Approve KPI Individu</button>' +
                                    '</th>';

                                status_badge = 'label-light-info';
                            } else if (x.status.status_tipe == 'Declined') {
                                status_badge = 'label-light-danger';
                            } else if (x.status.status_tipe == 'Approved') {
                                status_badge = 'label-light-success';
                            }

                            var html =
                                `<div class="card card-custom gutter-b ${status_card} kpi-individu-card">` +
                                '<div class="card-body pt-3">' +
                                '<div class="d-flex align-items-center justify-content-between mb-3 ribbon ribbon-clip ribbon-right mb-5 pb-6">' +
                                '<div class="ribbon-target bg-warning" style="top: 5px; right: -40px;">' +
                                '<span class="ribbon-inner bg-warning"></span>Approval KPI Individu' +
                                '</div>' +
                                '</div>' +
                                '<div class="d-flex mb-9">' +
                                '<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">' +
                                '<div class="symbol symbol-50 symbol-lg-120">' +
                                '<img src="' + x.foto + '" onerror="imgError(this);" alt="pic"/>' +
                                '</div>' +
                                '<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">' +
                                '<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>' +
                                '</div>' +
                                '</div>' +
                                ' <div class="flex-grow-1">' +
                                '<div class="d-flex justify-content-between flex-wrap mt-1">' +
                                '<div class="d-flex mr-3">' +
                                '<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">' +
                                (x.m_karyawan ? x.m_karyawan.nama : "-") + '</a>' +
                                '<span class="label label-lg font-weight-bold ' + status_badge +
                                ' label-inline" id="status' + x.nik + '">' + x.status.status_tipe_desc +
                                '</span>' +
                                '</div>' +
                                '<div class="my-lg-0 my-3">' +
                                '<img src="' + base_url_web + '' + x.m_karyawan.companys.assets_logo +
                                '" style="height:40px;width:auto;" alt="Pupuk Indonesia">' +
                                '</div>' +
                                '</div>' +
                                '<div class="d-flex flex-wrap justify-content-between mt-1">' +
                                '<div class="d-flex flex-column flex-grow-1 pr-8">' +
                                '<div class="d-flex flex-wrap mb-4">' +
                                '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                '<i class="flaticon2-user mr-2 font-size-lg"></i>' + x.m_karyawan
                                .emp_no + '</a>' +
                                '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                '<i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>' + x.m_karyawan
                                .pos_title + '</a>' +
                                '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                '<i class="flaticon-settings-1 mr-2 font-size-lg"></i>Version ID : ' + x
                                .ver1 + '.' + x.ver2 + '</a>' +
                                '</div>' +
                                '<span class="font-weight-bold text-dark-50">' + x.m_karyawan.pos_id +
                                ' - ' + x.m_karyawan.pos_title + '</span>' +
                                '<span class="font-weight-bold text-dark-50">' + x.m_karyawan.dept_id +
                                ' - ' + x.m_karyawan.dept_title + '</span>' +
                                '</div>' +

                                '</div>' +
                                '</div>' +
                                '</div>' +

                                '<div class="separator separator-solid"></div>' +

                                '<div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">' +
                                '<div class="card">' +
                                '<div class="card-header" id="headingOne2">' +
                                '<div class="card-title" data-toggle="collapse" data-target="#id' + x
                                .nik + '" onclick="getDataKpiIndi(' + x.nik + ')">' +
                                'Detail KPI' +
                                '&nbsp;<span class="label label-lg font-weight-bold label-light-primary label-inline">Klik Di sini untuk Approval</span>' +

                                '</div>' +

                                '</div>' +
                                '<div id="id' + x.nik +
                                '" class="collapse" data-parent="#accordionExample2">' +
                                '<div class="card-body" style="overflow-x:auto;">' +
                                '<table class="table table-separate table-head-custom table-checkable">' +
                                '<thead>' +
                                '<tr>' +
                                '<th>Actions</th>' +
                                '<th>KPI</th>' +
                                '<th>Target</th>' +
                                '<th>Polaritas</th>' +
                                '<th>Tipe</th>' +
                                '<th>Frekuensi</th>' +
                                '</tr>' +
                                '</thead>' +
                                '<tbody id="tbody' + x.nik + '">' +

                                '</tbody>' +
                                '<tfoot>' +
                                '<tr>' +
                                '<th colspan="4" class="text-right font-weight-normal">' +
                                '<div class="text-right" id="bobot_strategis' + x.nik +
                                '">Bobot Strategis : 0%</div>' +
                                '<div class="text-right my-1" id="bobot_generik' + x.nik +
                                '">Bobot Generik : 0%</div>' +
                                '<br>' +
                                '<div class="text-right font-weight-boldest my-1" id="total_strategis' +
                                x
                                .nik +
                                '">Total Bobot KPI Strategis : 0%</div>' +
                                '</th>' +
                                '<th colspan="2" class="text-right font-weight-normal">' +
                                '<div class="text-right my-1" id="bobot_teknis' + x.nik +
                                '">Bobot Teknis Unit Kerja : 0%</div>' +
                                '<div class="text-right" id="bobot_tekin' + x.nik +
                                '">Bobot Teknis Individu : 0%</div>' +
                                '<div class="text-right" id="bobot_taskforce' + x.nik +
                                '">Bobot Taskforce : 0%</div>' +
                                '<div class="text-right font-weight-boldest my-1" id="total_teknis' + x
                                .nik +
                                '">Total Bobot KPI Teknis : 0%</div>' +
                                '<div class="text-right font-weight-boldest mt-3" id="bobot' + x.nik +
                                '">Total Bobot : 0%</div>' +
                                '</th>' +
                                '</tr>' +
                                '<tr>' +
                                kondisi +
                                '</tr>' +
                                '</tfoot>' +
                                '</table>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            $('#card-kpi').append(html);
                            count++;
                        }

                        // console.log(x.kpi_title);
                    });


                    KTApp.unblock('#kt_content');
                },
                complete: function(data) {
                    if (history == false) {
                        $('.not-waiting-card').hide();
                    } else {
                        $('.not-waiting-card').show();
                    }
                },
                error: function(data) {
                    KTApp.unblock('#kt_content');
                }
            });
        }

        function getDataAppraissalAll(history = false) {
            $.ajax({
                type: 'POST',
                url: base_url + 'api/kpi/apprasial/getApprisialAtasan',
                data: {
                    nik: nik,
                    year: year
                },
                beforeSend: function(xhr) {
                    KTApp.block('#kt_content', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...'
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                },
                success: function(result) {

                    if (result.status == 200) {
                        if (result.data.length != 0) {
                            var arr = result.data;
                            count = 0;

                            arr.forEach(x => {
                                count++;
                                var kondisi = '';
                                var status =
                                    '<span class="label label-lg font-weight-bold label-light-success label-inline" id="status' +
                                    x.detail_appraissal.id_kpi_appraissal + '">' + x
                                    .detail_appraissal.status.status_tipe_desc + '</span>';
                                var status_card = 'not-waiting-card';
                                if (x.detail_appraissal.status.status_tipe_desc == 'Waiting Approval') {
                                    status_card = 'waiting-card'
                                    kondisi =
                                        '<th colspan="7" class="text-right border-0" id="action' + x
                                        .detail_appraissal.id_kpi_appraissal + '">' +
                                        '<button type="button" class="btn btn-light-danger font-weight-bold mr-3" onClick="declineFunctionAppraissal(' +
                                        x.detail_appraissal.id_kpi_appraissal +
                                        ')">Tolak Appraissal</button>' +
                                        '<button type="button" class="btn btn-light-primary font-weight-bold mt-2 mt-md-0" onClick="submitFunctionAppraissal(' +
                                        x.detail_appraissal.id_kpi_appraissal +
                                        ')">Approve Appraissal</button>' +
                                        '</th>';

                                    status =
                                        '<span class="label label-lg font-weight-bold label-light-info label-inline" id="status' +
                                        x.detail_appraissal.id_kpi_appraissal + '">' + x
                                        .detail_appraissal.status.status_tipe_desc + '</span>';
                                } else if (x.detail_appraissal.status.status_tipe_desc ==
                                    'Declined') {
                                    status =
                                        '<span class="label label-lg font-weight-bold label-light-danger label-inline" id="status' +
                                        x.detail_appraissal.id_kpi_appraissal + '">' + x
                                        .detail_appraissal.status.status_tipe_desc + '</span>';
                                }

                                if (x.detail_appraissal.total_nilai != null) {
                                    var total_nilai = x.detail_appraissal.total_nilai;
                                } else {
                                    total_nilai = '0';
                                }

                                var html =
                                    `<div class="card card-custom gutter-b ${status_card} appraissal-card">` +
                                    '<div class="card-body pt-3">' +
                                    '<div class="d-flex align-items-center justify-content-between mb-3 ribbon ribbon-clip ribbon-right mb-5 pb-6">' +
                                    '<div class="ribbon-target bg-danger" style="top: 5px; right: -40px;">' +
                                    '<span class="ribbon-inner bg-danger"></span>Appraissal KPI' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="d-flex mb-9">' +
                                    '<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">' +
                                    '<div class="symbol symbol-50 symbol-lg-120">' +
                                    '<img src="' + x.foto +
                                    '" onerror="imgError(this);" alt="pic"/>' +
                                    '</div>' +
                                    '<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">' +
                                    '<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>' +
                                    '</div>' +
                                    '</div>' +
                                    ' <div class="flex-grow-1">' +
                                    '<div class="d-flex justify-content-between flex-wrap mt-1">' +
                                    '<div class="d-flex mr-3">' +
                                    '<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">' +
                                    x.emp.nama + '</a>' +
                                    status +
                                    '</div>' +
                                    '<div class="my-lg-0 my-3">' +
                                    '<img src="' + base_url_web + '' + x.emp.companys.assets_logo +
                                    '" style="height:40px;width:auto;" alt="Pupuk Indonesia">' +
                                    '</div>' +
                                    '</div>' +
                                    '<div class="d-flex flex-wrap justify-content-between mt-1">' +
                                    '<div class="d-flex flex-column flex-grow-1 pr-8">' +
                                    '<div class="d-flex flex-wrap mb-4">' +
                                    '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                    '<i class="flaticon2-user mr-2 font-size-lg"></i>' + x.emp
                                    .emp_no + '</a>' +
                                    '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                    '<i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>' + x.emp
                                    .pos_title + '</a>' +
                                    '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                    '<i class="flaticon2-calendar-2 mr-2 font-size-lg"></i> Periode : ' +
                                    x.month_start + ' s.d. ' + x.month_end + ' (' + x
                                    .detail_appraissal.periode_pengajuan_desc + ')</a>' +
                                    '</div>' +
                                    '<span class="font-weight-bold text-dark-50">' + x.emp.pos_id +
                                    ' - ' + x.emp.pos_title + '</span>' +
                                    '<span class="font-weight-bold text-dark-50">' + x.emp.dept_id +
                                    ' - ' + x.emp.dept_title + '</span>' +
                                    '</div>' +

                                    '</div>' +
                                    '</div>' +
                                    '</div>' +

                                    '<div class="separator separator-solid"></div>' +

                                    '<div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">' +
                                    '<div class="card">' +
                                    '<div class="card-header" id="headingOne2">' +
                                    '<div class="card-title" data-toggle="collapse" data-target="#id' +
                                    x.detail_appraissal.id_kpi_appraissal + '">' +
                                    'Detail KPI' +
                                    '&nbsp;<span class="label label-lg font-weight-bold label-light-primary label-inline">Klik Di sini untuk Appraissal</span>' +

                                    '</div>' +

                                    '</div>' +
                                    '<div id="id' + x.detail_appraissal.id_kpi_appraissal +
                                    '" class="collapse" data-parent="#accordionExample2">' +
                                    '<div class="card-body" style="overflow-x:auto;">' +
                                    '<table class="table table-separate table-head-custom table-checkable">' +
                                    '<thead>' +
                                    '<th>KPI</th>' +
                                    '<th>Polaritas</th>' +
                                    '<th >Target / Realisasi</br>' + x.month_start + ' s.d. ' + x
                                    .month_end + '</th>' +
                                    '<th >Progress</br>' + x.month_start + ' s.d. ' + x.month_end +
                                    '</th>' +
                                    '<th>Konversi <br> Nilai</th>' +
                                    '<th>Bobot</th>' +
                                    '<th>Nilai</th>' +
                                    '</thead>' +
                                    '<tbody id="tbody' + x.detail_appraissal.id_kpi_appraissal +
                                    '">' +
                                    '</tbody>' +
                                    '<tfoot>' +
                                    '<tr>' +
                                    ' <th colspan="5">' +
                                    '<div class="text-right">Total Bobot dan Skor KPI Aktif :</div>' +
                                    '</th>' +
                                    '<th class="px-0 text-center"><span id="total_bobot">' +
                                    parseFloat(parseFloat(x.nilai_bobot).toFixed(2)) +
                                    '</span>%</th>' +
                                    '<th class="px-0 text-center"><span id="total_skor">' +
                                    parseFloat(parseFloat(x.nilai_skor).toFixed(2)) +
                                    '</span>%</th>' +
                                    '</tr>' +
                                    '<tr>' +
                                    '<th colspan="5">' +
                                    '<div class="text-right">Pencapaian Skor KPI :</div>' +
                                    '</th>' +
                                    '<th colspan="2" class="font-size-h3 px-0 text-center"><span  id="total_nilai">' +
                                    parseFloat(parseFloat(x.nilai_total).toFixed(2)) +
                                    '</span>%</th>' +
                                    ' </tr>' +
                                    '<tr>' +
                                    kondisi +
                                    '</tr>' +
                                    '</tfoot>' +
                                    '</table>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>' +
                                    '</div>';

                                $('#card-kpi').append(html);

                                if (x.data_appraissal_indi != null) {
                                    var array = x.data_appraissal_indi;
                                    var totalBobot = 0;
                                    var konversi_nilai = 0;
                                    var hitung = 1;
                                    array.forEach(y => {

                                        if (y.status == 'In Active') {
                                            var statusActive =
                                                '<td colspan="6" nowrap="nowrap" class="text-center">' +
                                                '<span class="">' +
                                                '<i class="flaticon-warning display-4 text-warning font-weight-bold"></i>' +
                                                '</span>' +
                                                '<div class="d-flex flex-column text-dark-75">' +
                                                '<span class="font-weight-bolder font-size-sm">Inactive</span>' +
                                                '</div>' +
                                                '</td>';
                                        } else {
                                            if (y.konversi_nilai > 110) {
                                                konversi_nilai = 110;
                                            } else {
                                                konversi_nilai = parseFloat(y
                                                    .konversi_nilai).toFixed(1);
                                            }

                                            var colorBar = 'warning';
                                            if (y.progress < 80) {
                                                colorBar = 'danger';
                                            } else if (y.progress >= 90) {
                                                colorBar = 'success';
                                            }

                                            statusActive =
                                                '<td>' +
                                                '<div class="mb-0">' + y.polaritas_tipe
                                                .pol_tipe_desc + '</div>' +
                                                '</td>' +
                                                '<td>' +
                                                '<div class="mb-0"><small class="text-success">Target :</small><br> <strong class="font-weight-bolder font-size-lg">' +
                                                parseFloat(parseFloat(y.target).toFixed(
                                                    7)) +
                                                '</strong><span class="font-size-sm"> ' + y
                                                .satuan +
                                                '</span><br><small class="text-success">Realisasi :</small><br> <strong class="font-weight-bolder font-size-lg">' +
                                                parseFloat(parseFloat(y.realisasi).toFixed(
                                                    7)) +
                                                '</strong><span class="font-size-sm"> ' + y
                                                .satuan + '</span></div>' +
                                                '</td>' +
                                                '<td nowrap="nowrap">' +
                                                '<div class="d-flex flex-column w-100 mr-2">' +
                                                '<div class="d-flex align-items-center justify-content-between mb-2">' +
                                                '<span class="text-muted mr-2 font-size-sm font-weight-bold">' +
                                                parseFloat(y.progress).toFixed(1) +
                                                '%</span>' +
                                                '<span class="text-muted font-size-sm font-weight-bold">Progress</span>' +
                                                '</div>' +
                                                '<div class="progress progress-xs w-100">' +
                                                '<div class="progress-bar bg-' + colorBar +
                                                '" role="progressbar" style="width: ' +
                                                parseFloat(y.progress).toFixed(1) +
                                                '%;" aria-valuenow="' + parseFloat(y
                                                    .realisasi).toFixed(1) +
                                                '" aria-valuemin="0" aria-valuemax="' +
                                                parseFloat(parseFloat(y.target).toFixed(
                                                    7)) + '"></div>' +
                                                '</div>' +
                                                '</div>' +
                                                '</td>' +
                                                '<td>' +
                                                '<div class="font-weight-bolder font-size-lg mb-0">' +
                                                parseFloat(parseFloat(konversi_nilai)
                                                    .toFixed(2)) + '%</div>' +
                                                '</td>' +
                                                '<td>' +
                                                '<div class="font-weight-bolder font-size-lg mb-0">' +
                                                y.bobot + '%</div>' +
                                                '</td>' +
                                                '<td>' +
                                                '<div class="font-weight-bolder font-size-lg mb-0">' +
                                                parseFloat(parseFloat(y.nilai).toFixed(2)) +
                                                '%</div>' +
                                                '</td>';
                                        }

                                        var sub_kpi = y.sub_kpi ? y.sub_kpi : '-';

                                        if (y.tipe.kpi_tipe_desc == 'Strategis') {
                                            var bg_color = 'bg-success text-white';
                                        } else if (y.tipe.kpi_tipe_desc ==
                                            'Teknis Unit Kerja') {
                                            var bg_color = 'bg-danger text-white';
                                        } else if (y.tipe.kpi_tipe_desc == 'Generik') {
                                            var bg_color = 'bg-light-dark text-dark';
                                        } else if (y.tipe.kpi_tipe_desc == 'Taskforce') {
                                            var bg_color = 'bg-warning text-white';
                                        } else {
                                            var bg_color = 'bg-dark text-white';
                                        }

                                        var html2 = '<tr>' +
                                            '<td>' +
                                            '<div class="d-flex">' +
                                            '<h6 class="mt-1">' + hitung + '.</h6>' +
                                            '<div class="ml-4">' +
                                            '<div class="text-dark-75 font-weight-bolder font-size-lg mb-0">' +
                                            y.kpi_title + '<br></div>' +
                                            '<small class="text-dark-50 font-weight-bold font-size-xs m-0">Sub : ' +
                                            sub_kpi + '<br></small>' +

                                            '<a href="#" class="text-muted font-weight-bold text-hover-primary" style="pointer-events: none;">' +
                                            '<span class="symbol-label rounded px-2 ' +
                                            bg_color + '"><small>' + y.tipe.kpi_tipe_desc +
                                            '</small></span>' +
                                            '</a>' +

                                            '</div>' +
                                            '</div>' +
                                            '</td>' +
                                            statusActive +
                                            '</tr>';

                                        hitung++;
                                        $('#tbody' + x.detail_appraissal.id_kpi_appraissal)
                                            .append(html2);
                                    })
                                }
                                // console.log(x.kpi_title);
                            });
                        }
                    }

                    KTApp.unblock('#kt_content');
                },
                complete: function(data) {
                    if (history == false) {
                        $('.not-waiting-card').hide();
                    } else {
                        $('.not-waiting-card').show();
                    }
                },
                error: function(data) {
                    KTApp.unblock('#kt_content');
                }
            });
        }

        function declineFunction(nik, nik_login_user, periode_thn, position) {
            Swal.fire({
                title: "Apakah anda yakin ingin menolak KPI individu tersebut?",
                text: "Mohon untuk melakukan pengecekan data kembali terlebih dahulu",
                icon: "warning",
                input: "text",
                showCancelButton: true,
                confirmButtonText: "Ya, Tolak!",
                cancelButtonText: "Batalkan!",
                reverseButtons: true,
                inputPlaceholder: "Tuliskan pesan penolakan atau revisi!"
            }).then(function(result) {
                if (result === null) {
                    Swal.fire("Oops", "Anda Harus Mengisi Pesan Penolakan", "error");
                    return false;
                }

                if (result === "") {
                    Swal.fire("Oops", "Anda Harus Mengisi Pesan Penolakan", "error");
                    return false;
                }

                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'api/kpi/approval/actionKpiIndividu',
                        data: {
                            position: position,
                            nik_bawahan: nik,
                            nik: nik_login_user,
                            year: periode_thn,
                            message: result.value
                        },
                        beforeSend: function(xhr) {
                            KTApp.block('#kt_content', {
                                overlayColor: '#000000',
                                state: 'danger',
                                message: 'Please wait...'
                            });
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                        },
                        success: function(result) {
                            if (result.status == 200) {
                                KTApp.unblock('#kt_content');
                                Swal.fire("Success", "Penolakan Berhasil Dilakukan", "success");
                                cardActive()
                            } else {
                                KTApp.unblock('#kt_content');
                                Swal.fire(
                                    'Decline Failed',
                                    'error'
                                )
                            }
                        },
                        error: function(data) {
                            KTApp.unblock('#kt_content');
                            Swal.fire("Error", "Tidak Dapat Melakukan Penolakan", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire("Cancelled", "Silahkan Cek Data KPI", "error");
                }
            });
        }

        function submitFunction(nik, nik_login_user, periode_thn, position) {
            Swal.fire({
                title: "Apakah anda yakin ingin menyetujui KPI individu tersebut?",
                text: "Mohon untuk melakukan pengecekan data kembali",
                icon: "info",
                showCancelButton: true,
                confirmButtonText: "Ya, Terima!",
                cancelButtonText: "Batalkan!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'api/kpi/approval/actionKpiIndividu',
                        data: {
                            position: position,
                            nik_bawahan: nik,
                            nik: nik_login_user,
                            year: periode_thn
                        },
                        beforeSend: function(xhr) {
                            KTApp.block('#kt_content', {
                                overlayColor: '#000000',
                                state: 'danger',
                                message: 'Please wait...'
                            });
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                        },
                        success: function(result) {
                            if (result.status == 200) {
                                KTApp.unblock('#kt_content');
                                Swal.fire("Success", "Approval Berhasil Dilakukan", "success");
                                cardActive()
                            } else {
                                KTApp.unblock('#kt_content');
                                Swal.fire(
                                    'Submit Failed',
                                    'error'
                                )
                            }
                        },
                        error: function(data) {
                            KTApp.unblock('#kt_content');
                            Swal.fire("Error", "Tidak Dapat Melakukan Penyetujuan", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire("Cancelled", "Silahkan Cek Data KPI", "error");
                }
            });
        }

        function declineFunctionAppraissal(id) {
            Swal.fire({
                title: "Apakah anda yakin ingin menolak Appraissal Tersebut?",
                text: "Mohon memberikan keterangan kenapa appraissal ini di tolak, dan melakukan pengecekan data kembali terlebih dahulu",
                icon: "warning",
                input: 'textarea',
                showCancelButton: true,
                confirmButtonText: "Ya, Tolak!",
                cancelButtonText: "Batalkan!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value == null || result.value == '') {
                    Swal.fire("Wajib Memberikan Alasan !!!", "Maaf anda harus memberikan alasan penolakan", "Wajib Memberikan Alasan !!!");
                }
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'api/kpi/apprasial/actionAppraissal',
                        data: {
                            id_kpi_appraissal: id,
                            status: 'Declined',
                            keterangan: result.value
                        },
                        beforeSend: function(xhr) {
                            KTApp.block('#kt_content', {
                                overlayColor: '#000000',
                                state: 'danger',
                                message: 'Please wait...'
                            });
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                        },
                        success: function(result) {
                            if (result.status == 200) {
                                KTApp.unblock('#kt_content');
                                Swal.fire("Success", "Penolakan Berhasil Dilakukan", "success");
                                cardActive()
                            } else {
                                KTApp.unblock('#kt_content');
                                Swal.fire(
                                    'Decline Failed',
                                    'error'
                                )
                            }
                        },
                        error: function(data) {
                            KTApp.unblock('#kt_content');
                            Swal.fire("Error", "Tidak Dapat Melakukan Penolakan", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire("Cancelled", "Silahkan Cek Data Kembali", "error");
                }
            });
        }

        function submitFunctionAppraissal(id) {
            Swal.fire({
                title: "Apakah anda yakin ingin menyetujui Appraissal Tersebut?",
                text: "Mohon untuk melakukan pengecekan data kembali",
                icon: "info",
                showCancelButton: true,
                confirmButtonText: "Ya, Terima!",
                cancelButtonText: "Batalkan!",
                reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        type: 'POST',
                        url: base_url + 'api/kpi/apprasial/actionAppraissal',
                        data: {
                            id_kpi_appraissal: id,
                            status: 'Approved'
                        },
                        beforeSend: function(xhr) {
                            KTApp.block('#kt_content', {
                                overlayColor: '#000000',
                                state: 'danger',
                                message: 'Please wait...'
                            });
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                        },
                        success: function(result) {
                            if (result.status == 200) {
                                KTApp.unblock('#kt_content');
                                Swal.fire("Success", "Approval Berhasil Dilakukan", "success");
                                cardActive()
                            } else {
                                KTApp.unblock('#kt_content');
                                Swal.fire(
                                    'Decline Failed',
                                    'error'
                                )
                            }
                        },
                        error: function(data) {
                            KTApp.unblock('#kt_content');
                            Swal.fire("Error", "Tidak Dapat Melakukan Penyetujuan", "error");
                        }
                    });
                } else if (result.dismiss === "cancel") {
                    Swal.fire("Cancelled", "Silahkan Cek Data Kembali", "error");
                }
            });
        }

        function getDataKpiIndi(nik) {
            $('#tbody' + nik + '').html('');
            $.ajax({
                type: 'POST',
                url: base_url + 'api/kpi/individu/getAllDataKpiIndi',
                data: {
                    nik: nik,
                    year: year
                },
                beforeSend: function(xhr) {
                    KTApp.block('#kt_content', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...'
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);

                },
                success: function(result) {
                    var arr = result.data;
                    var bobot = 0;
                    var bobot_strategis = 0;
                    var bobot_teknis = 0;
                    var bobot_generik = 0;
                    var bobot_taskforce = 0;
                    var bobot_tekin = 0;
                    var total_strategis = 0
                    var total_teknis = 0
                    var count = 1;
                    var frequently_list = '';

                    arr.forEach(x => {
                        if (x.kpi_tipe == 'STRAT') {
                            var bg_color = 'bg-success text-white';
                            bobot_strategis = bobot_strategis + x.bobot;
                        } else if (x.kpi_tipe == 'TEKN') {
                            var bg_color = 'bg-danger text-white';
                            bobot_teknis = bobot_teknis + x.bobot;
                        } else if (x.kpi_tipe == 'TASK') {
                            var bg_color = 'bg-warning text-white';
                            bobot_taskforce = bobot_taskforce + x.bobot;
                        } else if (x.kpi_tipe == 'GEN') {
                            var bg_color = 'bg-light-dark text-dark';
                            bobot_generik = bobot_generik + x.bobot;
                        } else {
                            var bg_color = 'bg-dark text-white';
                            bobot_tekin = bobot_tekin + x.bobot;
                        }

                        if (x.bsc_tipe == 'MAIN') {
                            var bsc = '-';
                        } else {
                            if (x.bsc != null) {
                                var bsc = x.bsc.kpi_bsc_desc;
                            } else {
                                var bsc = '-';
                            }
                        }

                        if (x.frequently_list != null) {
                            frequently_list = x.frequently_list.kpi_frequently_desc;
                        } else {
                            frequently_list = '';
                        }

                        total_strategis = bobot_strategis + bobot_generik
                        total_teknis = bobot_taskforce + bobot_tekin + bobot_teknis
                        bobot = bobot + x.bobot;
                        var html =
                            '<tr>' +

                            '<td nowrap="nowrap">' +
                            '<a onclick="modalEdit(\'' + x.id_kpi_indi + '\',\'' + 'detailIndi' +
                            '\')" class="btn btn-sm btn-clean btn-icon" title="View KPI">' +
                            '<i class="la la-search"></i>' +
                            '</a>' +
                            '</td>' +

                            '<td>' +
                            '<div class="d-flex">' +
                            '<h6>' + count + '.</h6>' +
                            '<div class="ml-4">' +
                            '<div class="text-dark-75 font-weight-bolder font-size-lg mb-0">' + x
                            .kpi_title + '</div>' +
                            '<a href="#" class="text-muted font-weight-bold text-hover-primary" style="pointer-events: none;">' +
                            '<span class="symbol-label rounded px-2 ' + bg_color + '">' + x
                            .tipe.kpi_tipe_desc + '</span>' +
                            '<br><small>' + bsc + '</small></a>' +
                            '</div>' +
                            '</div>' +
                            '</td>' +


                            '<td>' +
                            '<div class="font-weight-bolder font-size-lg mb-0">' + x.target_tahunan +
                            ' ' + x.satuan + '</div>' +
                            '<div class="font-weight-bold text-muted">Bobot : ' + x.bobot + '%</div>' +
                            '</td>' +


                            '<td>' +
                            x.polaritas_tipe.pol_tipe_desc +
                            '</td>' +


                            '<td nowrap="nowrap">' +
                            '<div class="text-muted"><small>Tipe Cascade :</small></div>' +
                            '<div class="font-weight-bold">' + x.cascading.cascading_tipe_desc +
                            '</div>' +
                            '<div class="text-muted"><small>Tipe Target Bulanan :</small></div>' +
                            '<div class="font-weight-bold">' + x.target_bulan.target_bln_tipe_desc +
                            '</div> ' +
                            '</td>' +


                            '<td>' +
                            '<div class="font-weight-bold">' + frequently_list + '</div>' +
                            '</td>' +

                            '</tr>';

                        $('#tbody' + nik + '').append(html);
                        count++;

                        // console.log(x.kpi_title);
                    });

                    $('#bobot_strategis' + nik + '').html('Bobot Strategis : ' + bobot_strategis + '%');
                    $('#bobot_teknis' + nik + '').html('Bobot Teknis Unit Kerja : ' + bobot_teknis + '%');
                    $('#bobot_generik' + nik + '').html('Bobot Generik : ' + bobot_generik + '%');
                    $('#bobot_taskforce' + nik + '').html('Bobot Taskforce : ' + bobot_taskforce + '%');
                    $('#bobot_tekin' + nik + '').html('Bobot Teknis Individu: ' + bobot_tekin + '%');
                    $('#total_strategis' + nik + '').html('Total Bobot KPI Strategis : ' + total_strategis +
                        '%');
                    $('#total_teknis' + nik + '').html('Total Bobot KPI Teknis : ' + total_teknis + '%');
                    $('#bobot' + nik + '').html('Total Bobot : ' + bobot + '%');

                    KTApp.unblock('#kt_content');
                },
                error: function(data) {
                    KTApp.unblock('#kt_content');
                    Swal.fire(
                        'Get All Data KPI Individu Failed',
                        'error'
                    )
                }
            });
        }
    </script>
    
</body>

</html>