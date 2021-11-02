<?php require('header.php') ?>
<div class="p-4 order-content order-content-close">
    <div class="b-radius py-3 px-2 px-lg-3 box-effect order-contents">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-user active" id="add-technical-tab" data-bs-toggle="pill"
                    data-bs-target="#add-technical" type="button" role="tab" aria-controls="add-technical"
                    aria-selected="true">اضافه کردن فنی کار</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-link-user" id="remove-technical-tab" data-bs-toggle="pill"
                    data-bs-target="#remove-technical" type="button" role="tab" aria-controls="remove-technical"
                    aria-selected="false">حذف فنی کار</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="add-technical" role="tabpanel"
                aria-labelledby="add-technical-tab">
                <form class="row d-flex flex-wrap mx-0">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="bg-transparent border-0 form-control user-info"
                            placeholder="نام و نام خانوادگی">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="number" class="bg-transparent border-0 form-control user-info"
                            placeholder="کد ملی">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="email" class="bg-transparent border-0 form-control user-info" placeholder="ایمیل">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="number" class="bg-transparent border-0 form-control user-info"
                            placeholder="شماره همراه">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <input type="text" class="bg-transparent border-0 form-control user-info" placeholder="آدرس">
                    </div>
                    <div class="col-lg-6 mb-3 position-relative">
                        <!-- <input type="file" class="bg-transparent border-0 form-control user-info"
                            placeholder="آپلود رزومه"> -->
                        <input type="file" class="h-100 w-100 position-absolute upload-file">
                        <input class="bg-transparent border-0 form-control user-info" placeholder="آپلود رزومه">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-cloud-arrow-down position-absolute upload-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
                            <path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
                        </svg>
                    </div>
                    <div class="col-12 mb-3">
                        <button type="submit" class="black-color border-0 btn px-4 submit-btn">
                            <span>اضافه کردن
                                فنی کار
                            </span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="remove-technical" role="tabpanel" aria-labelledby="remove-technical-tab">
                <form action="" class="d-flex justify-content-center mb-3">
                    <div class="position-relative search-box">
                        <input type="text" class="bg-transparent border-0 form-control user-info"
                            placeholder="جستجوی فنی کار">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search position-absolute search-icon" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                        <div class="position-absolute w-100 search-result d-none">
                            <ul class="mb-0">
                                <li class="py-2" onclick="showTechnicalDetails()">پریا بهاری</li>
                                <li>پیام بهمنی</li>
                            </ul>
                        </div>
                    </div>
                </form>
             <!-- IN ID B TOR MESAL DADE SHODE!!!!!!!! -->
                <div class="table-responsive tickets d-none" id="technicalTable">
                    <table class="table all-user-info">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col" class="text-center">نام و نام خانوادگی</th>
                                <th scope="col" class="text-center">ايميل</th>
                                <th scope="col" class="text-center">شماره همراه</th>
                                <th scope="col" class="text-center">آدرس</th>
                                <th scope="col" class="text-center">مشاهده رزومه</th>
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
                            <tr id="technical-info1" class="d-none">
                                <th scope="row" class="text-center">1</th>
                                <td class="text-center black-color">پریا بهاری</td>
                                <td class="text-center black-color">gh.samudi@gmail.com</td>
                                <td class="text-center black-color">09121234567</td>
                                <td class="text-center black-color">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                                    صنعت چاپ</td>
                                <td class="text-center black-color">
                                    <a href="" class="btn-effect px-4 black-color more-user-info">مشاهده</a>
                                </td>
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