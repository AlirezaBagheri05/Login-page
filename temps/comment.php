<form id='feedback' style="height: 0px;" class="form-horizontal direction_rtl form-1" action="#">
  <div class="form-group ">
    <label class="control-label col-sm-2 flex_1" for="email">ایمیل:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" required id="email" placeholder="ایمیل خود را  وارد کنید">
    </div>
  </div>
  <div class="form-group ">
    <label class="control-label col-sm-2 flex_1 "   for="pwd">توضیح:</label>
    <div class="col-sm-10">
      <textarea id="id" name="name" class="form-control" required  placeholder="متن خود را در اینجا بنویسید." rows="5" cols="10"></textarea>
    </div>
  </div>
  <div class="form-group flex_1 ">
    <div class="col-sm-offset-2 col-sm-10 center_1">
      <button type="submit" class="btn btn-default btn-outline-success">ارسال</button>
    </div>
    <div class="col-sm-offset-2 col-sm-10 center_1">
        <button type="button" onclick='feed()' class="btn btn-default btn-outline-warning">بستن</button>
    </div>
    <div class="col-sm-offset-2 col-sm-10 center_1">
      <button type="reset" class="btn btn-default btn-outline-danger">ریست</button>
    </div>
      
  </div>
</form>
