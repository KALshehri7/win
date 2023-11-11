<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<?php
include './parts/header.php';
?>
<body>

     <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
          <img src="images/nour.jpg" alt="" >
        <h1 class="display-4 fw-normal">اربح مع خديجة </h1>
        <p class="lead fw-normal">باقي على فتح التسجيل</p>
        <div id="demo"><div id="demo"> </div> </div>
        <p class="lead fw-normal">للسحب على سحب نسحة مجانية من برنامج الحظ</p>
      </div>

      <style>
        .container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .list-group {
            list-style-type: none;
            padding: 0;
        }

        .list-group-item {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        .list-group-item[aria-current="true"] {
            background-color: #cc4bac;
            color: #fff;
        }
    </style>
      <div class="container">
        <ul class="list-group">
            <li class="list-group-item" aria-current="true">عنوان 1</li>
            <li class="list-group-item">عنوان 2</li>
            <li class="list-group-item">عنوان 3</li>
        </ul>
      </div>

     </div>


    <div class="position-relative overflow-hidden  text-center ">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="mb-3">
              <label  class="form-label">الاسم الاول </label>
              <input type="text" name="firstname" id="firstname" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"><?PHP echo $errors['firstNameError']?></div>
            </div>
            <div class="mb-3">
              <label  class="form-label">الاسم الثاني </label>
              <input type="text" name="lastname" id="lastname" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"></div>
            </div>
            <div class="mb-3">
              <label  class="form-label">البريد الالكتروني</label>
              <input type="email" name="email" id="email" class="form-control"  aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text error"></div>
            </div>
            
            <button  style="background-color:#cc4bac;" type="submit" name="submit" class="btn btn-success">ارسال العلومات</button>
        </form>
      </div>
    </div>

        <div class="loader-con">
          <div id="loader">
              <canvas id="circularLoader" width="200" height="200"></canvas>
          </div>
        </div>


    <div class="d-grid gap-2 col-6 mx-auto my-5">
      <button style="background-color:#cc4bac;" id="winner" type="button" class="btn btn-success" >
        اختار الرابح
      </button>
    </div>

    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php foreach ($users as $user) : ?>
            
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstname']).'  '.htmlspecialchars($user['lastname']); ?></h1>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>



    
    <?php
    include './inc/footer.php'
    ?>
</body>
</html>