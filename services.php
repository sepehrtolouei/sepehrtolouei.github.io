<?php require('header.php') ?>

<div class="order-content order-content-close">
  <div class="row mx-0">
    <div class="col-md-2 col-lg-3"></div>
    <div class="box-effect col-md-8 col-lg-6 mt-5 b-radius">
      <form action="" class="align-items-center d-flex flex-column w-100" id="services-form">
        <!-- <input type="file" placeholder="آپلود عکس" class="w-100 my-3"> -->
        <div class="position-relative w-100 my-3">
          <input type="file" class="position-absolute upload-file" id="service-img">
          <input class="bg-transparent border-0 form-control user-info" id="upload-image" placeholder="آپلود عکس">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-cloud-arrow-down position-absolute upload-icon" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M7.646 10.854a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 9.293V5.5a.5.5 0 0 0-1 0v3.793L6.354 8.146a.5.5 0 1 0-.708.708l2 2z" />
            <path
              d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
          </svg>
        </div>
        <div class="position-relative w-100 my-3">
          <input type="text" id="serviceTitle" placeholder="عنوان خدمات" autocomplete="off"
            class="w-100 my-3 bg-transparent border-0 form-control user-info">
          <div class="position-absolute px-2 service-title-popup d-none">
            <p class=" px-1 text-white position-relative mb-0 service-title-popup-content">عنوان خدمات را وارد کنید</p>
          </div>
        </div>
        <button type="submit" class="bg-transparent border-0 btn-effect my-3 px-5 py-1"
          id="send-service">انتشار</button>
      </form>
    </div>
    <div class="col-md-2 col-lg-3"></div>
  </div>
</div>
<?php require('footer.php') ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.46/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/additional-methods.js"></script>