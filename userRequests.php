<?php require('header.php') ?>
<div class="order-content order-content-close">
    <div class="bl-radius py-3 px-2 px-lg-3 box-effect h-100vh order-contents">
        <form action="" class="d-flex flex-column align-items-center mb-3">
            <div class="position-relative search-box">
                <input type="text" class="bg-transparent border-0 form-control user-info search-technician"
                    placeholder="جستجوی کاربران">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-search position-absolute search-icon" viewBox="0 0 16 16">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                    </path>
                </svg>
            </div>
        </form>
        <div class="b-radius px-2 py-3 table-responsive tickets">
            <table class="table all-user-info">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col" class="text-center">نوع درخواست</th>
                        <th scope="col" class="text-center">مکان درخواست</th>
                        <th scope="col" class="text-center">زمان ثبت</th>
                        <th scope="col" class="text-center">تاریخ درخواست کاربر</th>
                    </tr>
                </thead>
                <tbody id="userRequests">

                </tbody>
            </table>
        </div>
    </div>

</div>
<?php require('footer.php') ?>