<!-- Section: Design Block -->
<section style="position: relative;" class="background-radial-gradient overflow-hidden">
<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
<?PHP 
                            if(!empty($_POST['name']) && !empty($_POST['family']) && !empty($_POST['phone'])){
                            $family = $_POST['family'];
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $valid = get_phone_user('users', $phone);
                            if(!$valid){
                                            $date = date('Y-m-d').' / '.date('H:i:s');
                                            $connect = mysqli_connect(SERVER_NAME,USER_NAME,USER_PASSWORD,db_name);
                                            $info = $_SERVER;
                                            foreach ($info as $value){
                                                global $information;
                                                $information .= " ! ".$value;
                                            }
                                            $ip = $_SERVER['REMOTE_ADDR'];  
                                            $model = $_SERVER['HTTP_USER_AGENT'];  
                                            $resulotion= $_COOKIE['resulotion'];
                                            $date_user= $_COOKIE['date'];
                                            $sqrInsert = "INSERT INTO `users` (`id`, `name`, `family`, `phone`, `date`, `date_user`, `model`, `ip`, `resulotion`) VALUES (NULL, '$name', '$family', '$phone', '$date', '$date_user', '$model', '$ip', '$resulotion')";
                                            $resultInsert = mysqli_multi_query($connect, $sqrInsert);
                                            if($resultInsert){
                                                        ?>
                                                                 <div class="alert alert-success top_pup" role="alert">
                                                                 <h4 class="alert-heading direction_rtl">با موفقیت ثبت شد!</h4>
                                                                 <p class="direction_rtl">شما در قرعه کشی عید سعید فطر  " بسته اینترنت هفت روزه + ۵ گیگابایت (ایرانسل ، همراه اول ، رایتل) - اعتباری " شرکت کرده اید. پس از اتمام عید سعید فطر قرعه کشی انجام خواهد شد</p>
                                                                 <hr>
                                                                 <p class="mb-0 direction_rtl">اگر با رعایت تمام شرایط هنوز بسته را دریافت نکردید میتوانید از طریق بخش "feedback" به ما اطلاع دهید. با ارزوی بهترین ها</p>
                                                               </div>
                                                       <?PHP

                                                          }else{
                                                              ?>
                                                                <div class="alert alert-danger top_pup" role="alert">
                                                                        <h4 class="alert-heading  direction_rtl">مشکلی در اجرای برنامه رخ داد!</h4>
                                                                        <p class="direction_rtl">لطفا یکبار دیگر امتحان کنید . در صورت ارور دادن برنامه در بخش "feedback" به ما اطلاع دهید تا هرچه سریع تر خطا را رفع کنیم..❤</p>
                                                                        <hr>
                                                                        <p class="mb-0 direction_rtl">با عرض پوزش</p>
                                                                      </div>
                                                             <?PHP
                                                                }      
                                                                 
                            
                                
                            }else{
                                                        ?>
                                                          <div class="alert alert-danger top_pup" role="alert">
                                                                  <h4 class="alert-heading  direction_rtl">مشکلی در اجرای برنامه رخ داد!</h4>
                                                                  <p class="direction_rtl">این شماره قبلا در قرعه کشی ثبت شده است. لطفا یک شماره دیگر را امتحان کنید.</p>
                                                                  <hr>
                                                                  <p class="mb-0 direction_rtl">با عرض پوزش</p>
                                                                </div>
                                                        <?PHP
                            }
                            
                                    }
                                    
                            
                 
                 
                  ?>
            <div class="row gx-lg-5 align-items-center mb-5">
              <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                  <img class="img_n" src="inc/100.png" alt=""/>
                <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                  سلام و درود <br />
                  <span style="color: hsl(218, 81%, 75%)">عید سعید فطر مبارک </span>
                  
                </h1>
                <!--<p class="direction_rtl mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">سلام و درود </p>-->
                
                <p class="direction_rtl mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">طاعات و عبادتتون قبول درگاه حق تعالی  </p>
                 
                <p class="direction_rtl mb-4 opacity-70" style="color: hsl(218, 81%, 85%)"> 
                    با توجه به عید سعید فطر ، برای فرادرسی های عزیز بسته های اینترنتی قرار گرفته شده است که بصورت قرعه کشی به ۲۰ نفر جایزه تعلق می‌گیرد.این جوایز برای هر نفر ۵ گیگ  (هفتگی ۵ گیگ اعتباری)که در مجموع ۱۰۰ گیگ برای ۲۰ نفر در نظر گرفته شده است.
این صفحه تا ۱۴ ام اردیبهشت باز خواهد بود و پس از آن قرعه کشی بین افراد ثبت نام شده به عمل می آید و جوایز همان روز به عزیزان تعلق می‌گیرد.
با آرزوی بهترین ها
</p>

<!--                <p class="direction_rtl mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
(دوستان توجه فرمایید که فقط ۱۵۰ بسته اینترنت برای مناسبت ماه رمضان در نظر گرفته شده است.) 
                </p>-->
                <p class="direction_rtl mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">** پس از پرشدن ظرفیت ، سایت غیرفعال خواهد شد. </p>
              </div>

              <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <img class='img_big' src="inc/fetrrrr.jpg" alt=""/>
                  <div class="card-body px-4 py-5 px-md-5">
                      <form method="POST">
                      <!-- 2 column grid layout with text inputs for the first and last names -->
                      <div class="flex_3 row direction_rtl">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label flex_1 padding_btm" for="form3Example1"> نام</label>
                            <input type="text" id="form3Example1" name='name' required class="form-control" />
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-labe flex_1 padding_btml" for="form3Example2">نام  خانوادگی</label>
                            <input type="text" id="form3Example2"name="family" required class="form-control" />
                          </div>
                        </div>
                      </div>

                      <!-- Email input -->
<!--                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                      </div>-->

                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <label class="form-label flex_2 padding_btm" for="form3Example4">شماره همراه</label>
                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="123 456 7890" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
                      </div>

                      <!-- Checkbox -->
<!--                      <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                        <label class="form-check-label" for="form2Example33">
                          Subscribe to our newsletter
                        </label>
                      </div>-->

                      <!-- Submit button -->
                      <button type="submit" class="btn btn-primary btn-block mb-4">
                        ثبت
                      </button>

                      <!-- Register buttons -->
                      <div class="text-center">
                        <p>اپراتورهای زیر قابل تایید است</p>
                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class=" fab">
                          <img class="picture_1" src="inc/Vector-Logo-Irancell-Logosource.png" alt=""/>
                          </i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab ">
                          <img class="picture_1" src="inc/57589707.png" alt=""/>
                          </i>
                        </button>

                        <button type="button" class="btn btn-link btn-floating mx-1">
                          <i class="fab">
                          <img class="picture_1" src="inc/rightel.png" alt=""/>
                          </i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
              <?PHP 
                  include_once 'counter.php';
              ?>
          </div>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1361 470" style="enable-background:new 0 0 1361 470;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#FFFFFF;}
</style>
<path class="st0" d="M0,195c33.6-4.7,80.3-10.1,136.3-13c141.2-7.3,253.2,5.7,331.7,15.1c59.9,7.2,104.5,14.3,140.9,20.9
	c97.8,17.9,168,31.7,180.8,34.4c78.6,16.4,233.5,19.7,571.3-42.4c0,86.7,0,173.3,0,260c-453.7,0-907.3,0-1361,0
	C0,378.3,0,286.7,0,195z"/>
</svg>
        </section>
