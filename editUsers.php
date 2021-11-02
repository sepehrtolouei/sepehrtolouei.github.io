<?php require('header.php') ?>

<div class="p-4 order-content order-content-close">
    <div class="b-radius py-3 px-2 px-lg-3 box-effect order-contents">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-user active" id="add-user-tab" data-bs-toggle="pill"
                    data-bs-target="#add-user" type="button" role="tab" aria-controls="add-user"
                    aria-selected="true">اضافه کردن کاربر</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-user" id="remove-user-tab" data-bs-toggle="pill"
                    data-bs-target="#remove-user" type="button" role="tab" aria-controls="remove-user"
                    aria-selected="false">حذف کاربر</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="add-user" role="tabpanel" aria-labelledby="add-user-tab">
                <form class="row d-flex flex-wrap mx-0">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="bg-transparent border-0 form-control user-info"
                            placeholder="نام و نام خانوادگی">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="bg-transparent border-0 form-control user-info" placeholder="آدرس">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="number" class="bg-transparent border-0 form-control user-info"
                            placeholder="شماره موبايل">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="bg-transparent border-0 form-control user-info" placeholder="ایمیل">
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" class="black-color border-0 btn px-4 submit-btn" id="editUser">
                            <span>اضافه کردن
                                کاربر</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="remove-user" role="tabpanel" aria-labelledby="remove-user-tab">
                <form action="" class="d-flex justify-content-center">
                    <div class="position-relative search-box">
                        <input type="text" class="bg-transparent border-0 form-control user-info"
                            placeholder="جستجوی کاربر">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search position-absolute search-icon" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </div>
                </form>
                <div class="d-flex justify-content-center mt-4 serach-result">
                     <div class="table-responsive tickets">
                    <table class="table">
                        <tbody>
                            <tr onclick="showUserDetails()">
                                <td class="text-center black-color">پریا بهاری</td>
                            </tr>
                            <tr>
                                <td class="text-center black-color">پیام بهمنی</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
                <div class="table-responsive tickets ">
                    <table class="table all-user-info">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">نام و نام خانوادگی</th>
                                <th scope="col" class="text-center">موبايل</th>
                                <th scope="col" class="text-center">ايميل</th>
                                <th scope="col" class="text-center">آدرس</th>
                                <th scope="col" class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="user-info1" class="d-none">
                                <th scope="row" class="text-center">1</th>
                                <td class="text-center black-color">پریا بهاری</td>
                                <td class="text-center black-color">09121234567</td>
                                <td class="text-center black-color">gh.samudi@gmail.com</td>
                                <td class="text-center black-color">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                <td class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-person-x remove-user" viewBox="0 0 16 16">
                                        <path
                                            d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        <path fill-rule="evenodd"
                                            d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php') ?>