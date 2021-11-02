<?php require('header.php') ?>
<div class="order-content order-content-close">
    <div class="bl-radius py-3 px-2 px-lg-3 box-effect h-100vh order-contents">
        <form action="" class="d-flex flex-column align-items-center mb-3">
            <div class="position-relative search-box">
                <input type="text" class="bg-transparent border-0 form-control user-info search-technician"
                    placeholder="جستجوی فنی کار">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search position-absolute search-icon" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </div>
            <!-- baiad vaghti serach kard in item ha neshun dade bshe-->
            <!-- <div class="position-absolute w-100 search-result d-none">
                    <ul class="mb-0">
                        <li class="py-2">پریا بهاری</li>
                        <li>پیام بهمنی</li>
                    </ul>
                </div> -->
            <div class="w-100">
                <div class="visit-all-technicians">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">avatar</th>
                                    <th class="text-center">createdAt</th>
                                    <th class="text-center">id</th>
                                    <th class="text-center">name</th>
                                </tr>
                            </thead>
                            <tbody id="techniciansCv"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
        <!-- va rooye har kodum az item ha k click shode..in table dide she -->
        <div class="table-responsive tickets d-none">
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
                    <tr class="d-none">
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
<?php require('footer.php') ?>