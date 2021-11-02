<?php require('header.php') ?>

<div class="order-content order-content-close">
    <div class="bl-radius py-3 px-2 px-lg-3 h-100vh order-contents">
        <div class="mt-5">
            <form action="" class="box-effect align-items-center d-flex flex-column px-2 offers-form" id="offersForm">
                <div class="w-100 exam">
                    <input type="text" id="offersTitle" placeholder="عنوان طرح" autocomplete="off"
                        class="w-100 my-3 bg-transparent border-0 form-control user-info about-offer">
                    <span class="w-100 d-none my-3 bg-transparent border-0 form-control user-info" id="about-offer"> SRGRSTG</span>
                </div>
                <div class="w-100" id="upload-offered-imgae">
                    <div class="position-relative w-100" id="choose-offers-img">
                        <input type="file" class="position-absolute w-100 h-100 upload-file " id="service-img">
                        <input class="bg-transparent border-0 form-control user-info upload-img" id="uploadOffersImage"
                            placeholder="آپلود عکس">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-cloud-arrow-down position-absolute upload-img-icon" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z">
                            </path>
                            <path
                                d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z">
                            </path>
                        </svg>
                    </div>
                    <div class="user-info d-none selected-image">
                        <img src="" alt="" class="w-100 h-100">
                        <!-- <img src="" alt="" class="w-100 h-100"> -->
                    </div>
                </div>
                <div class="w-100 exam">
                    <input type="text" id="offersAmount" placeholder="مقدار تخفیف" autocomplete="off"
                        class="w-100 my-3 bg-transparent border-0 form-control user-info about-offer">
                        <span class="w-100 d-none my-3 bg-transparent border-0 form-control user-info" id="offer-price">AERERESGTSE</span>
                </div>
            </form>
            <div class="d-flex justify-content-end w-100">
                <button type="submit" class="bg-transparent border-0 btn-effect my-3 px-5 py-1"
                    id="send-offers">انتشار</button>
            </div>

        </div>
    </div>
</div>

<?php require('footer.php') ?>