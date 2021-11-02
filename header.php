<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style1">
    <link rel="stylesheet" href="assets/css/responsive1.css">
    <title>panel admin</title>
</head>

<body class="panel-body">
    <div class="d-flex flex-column align-items-center align-items-sm-start flex-sm-row mx-0 ">
        <div id="mySidebar" class="box-effect sidebar sidebar-close px-0">
            <div class="d-flex flex-column justify-content-center ps-0 openbtn" onclick="openNav()">
                <span class="open-item"></span>
                <span class="open-item"></span>
                <span class="open-item"></span>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <div class="d-flex flex-column welcome welcomeS">
                    <div class="admin-pic">
                        <img src="assets/img/admin3.png" class="img-fluid" alt="">
                    </div>
                    <span class="f-size-sm mb-3 fw-bold black-color">خوش آمدید</span>
                </div>
                <div class="side-bar-item-close nav-link ps-0" id="manage-users-tab" data-bs-toggle="pill"
                    data-bs-target="#manage-users" type="button" role="tab" aria-controls="manage-users"
                    aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-envelope manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                    </svg>
                </div>
                <div class="nav-link manage side-bar-item-open d-none px-0" id="manage-users-tab" data-bs-toggle="pill"
                    data-bs-target="#manage-users" type="button" role="tab" aria-controls="manage-users"
                    aria-selected="false" data-parent="mySidebar">
                    <button class="align-items-center btn ps-0 w-100 d-flex flex-row  position-relative sidebar-item"
                        type="button" data-bs-toggle="collapse" data-bs-target="#userManagement" aria-expanded="false"
                        aria-controls="userManagement" data-parent="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-envelope manage-icon black-color" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg>
                        <span class="fw-bold black-color">مدیریت کاربران</span>
                    </button>
                    <div class="collapse indent" id="userManagement">
                        <ul class="manage-list ps-0">
                            <li class="manage-list-item ms-5 my-2">
                                <a href="./editUsers.php" class="fw-bold black-color">ویرایش کاربران</a>
                            </li>
                            <li class="manage-list-item ms-5 my-2">
                                <a href="userRequests.php?page=1&limit=9" class="fw-bold black-color"> درخواست کاربران</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="side-bar-item-close nav-link ps-0" id="manage-technician-tab" data-bs-toggle="pill"
                    data-bs-target="#manage-technician" type="button" role="tab" aria-controls="manage-technician"
                    aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-bell manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                    </svg>
                </div>
                <div class="nav-link manage side-bar-item-open d-none px-0" id="manage-technician-tab"
                    data-bs-toggle="pill" type="button"
                    aria-controls="manage-technician" aria-selected="false" data-parent="mySidebar">
                    <button class="align-items-center btn ps-0 w-100 d-flex flex-row  position-relative sidebar-item"
                        type="button" data-bs-toggle="collapse" data-bs-target="#technicianManagement"
                        aria-expanded="false" aria-controls="technicianManagement">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-bell manage-icon black-color" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                        </svg>
                        <span class="fw-bold black-color">مدیریت فنی کاران</span>
                    </button>
                    <div class="collapse indent" id="technicianManagement">
                        <ul class="manage-list ps-0">
                            <li class=" manage-list-item ms-5 my-2 fw-bold black-color">
                                <a href="editTechnical.php" class="black-color">ویرایش فنی کاران</a>
                            </li>
                            <li class=" manage-list-item ms-5 my-2 fw-bold black-color">
                                <a href="visit-technicians.php?page=1&limit=9" class="black-color">مشاهده فنی کاران</a>
                            </li>
                            <li class=" manage-list-item ms-5 my-2 fw-bold black-color">
                                <a href="cooperation-requests.php" class="black-color">درخواست های همکاری</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nav-link manage lower px-0 text-nowrap" id="services-tab" data-bs-toggle="pill"
                    data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-wrench manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019.528.026.287.445.445.287.026.529L15 13l-.242.471-.026.529-.445.287-.287.445-.529.026L13 15l-.471-.242-.529-.026-.287-.445-.445-.287-.026-.529L11 13l.242-.471.026-.529.445-.287.287-.445.529-.026L13 11l.471.242z" />
                    </svg>
                    <a href="services.php">
                        <span class="fw-bold black-color">اضافه کردن خدمات</span>
                    </a>
                </div>
                <div class="nav-link manage lower px-0 text-nowrap" id="sercives-price-tab" data-bs-toggle="pill"
                    data-bs-target="#sercives-price" type="button" role="tab" aria-controls="sercives-price"
                    aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-currency-dollar manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                    </svg>
                    <span class="fw-bold black-color">هزینه خدمات</span>
                </div>
                <div class="nav-link manage lower px-0 text-nowrap" id="articles-tab" data-bs-toggle="pill"
                    data-bs-target="#articles" type="button" role="tab" aria-controls="articles" aria-selected="false">
                    <!-- <i class="fas fa-newspaper manage-icon text-dark-color"></i> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-newspaper manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z" />
                        <path
                            d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z" />
                    </svg>
                    <span class="fw-bold black-color">مفالات</span>
                </div>
                <div class="nav-link manage lower px-0 text-nowrap" id="discount-tab" data-bs-toggle="pill"
                    data-bs-target="#discount" type="button" role="tab" aria-controls="discount" aria-selected="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-percent manage-icon black-color" viewBox="0 0 16 16">
                        <path
                            d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                    </svg>
                    <span class="fw-bold black-color">
                       <a href="offers.php"> طرح ویژه</a>
                    </span>
                </div>
                <a href="index.php" class="nav-link manage lower px-0 text-nowrap">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-house manage-icon black-color" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd"
                            d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    <span class="fw-bold black-color">خانه</span>
                </a>
            </div>
        </div>