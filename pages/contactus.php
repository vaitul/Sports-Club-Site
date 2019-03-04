<?php

$emailId = "vaitulb@gmaul.com";

if(isset($_POST['form']))
{

    $_POST['name']=trim($_POST['name']);
    $_POST['email']=trim($_POST['email']);
    $_POST['message']=trim($_POST['message']);

    if($_POST['name']==null || $_POST['email']==null || $_POST['message']==null || $_POST['name']=="" || $_POST['email']=="" || $_POST['message']==""  )
    {
        echo "failed";
        return;
    }
        
    $content = "
    <b>name : </b> <span>$_POST[name];</span>
    <br><br>
    <b>email : </b> <span>$_POST[email];</span>
    <br><br>
    <b>message : </b> <span>$_POST[message];</span>
    ";

    $content = wordwrap($content,70);

    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

    // send email
    mail($emailId,"JAYATE Contact by : $_POST[name]",$content,$headers);

    echo "success";
    return;
}
else
{ ?>
<br>
<div class="container">
      <div class="row" >
      </div>
      <div class="row" style="padding-top:0px;">
        <div class="col-lg-offset-4 col-lg-4 col-md-offset-4 col-md-4 col-sm-offset-2 col-sm-8 col-xs-offset-0 col-xs-12 " style="box-shadow:0px 0px 5px #888;background:rgba(250,250,250,0.20); border-radius:5px;" >
          <center><h2 style="padding-bottom:0px;"><i class="fa fa-sign-in" ></i>&nbsp;Contact Us<hr></center>
		  
          <form action="flag.php" method="post">

          <div class="form-group" style="padding-bottom:20px;">
            <div class="input-group">
              <span class="input-group-addon" style="background:#eee;"> <i class="fa fa-user" style="font-size:14pt;"></i> </span>
              <input required type="text" name="name" id="name" placeholder="Your full name here..." required class="form-control">
            </div>
          </div>
          
          
          <div class="form-group" style="padding-bottom:20px;">
            <div class="input-group">
              <span class="input-group-addon" style="background:#eee;"> <i class="fa fa-envelope " style="font-size:14pt;"></i> </span>
              <input required type="text" name="email" id="email" placeholder="Username here..." required class="form-control">
            </div>
          </div>


          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" style="background:#eee;"> <i class="fa fa-comment" style="font-size:14pt;"></i> </span>
            <textarea required style="width:100%;" placeholder="Your message here..." name="message" id="message" id="message" rows="4"></textarea>
            </div>
          </div>
          <div class="form-group" style="padding-bottom:20px;">
            <center style="padding-top:20px;"><span type="submit" name="submit" onclick="submit()" class="btn btn-success" style="width:110px;">Send</span></center>
          </div>
        </form>
        </div>
      </div>
    </div>

    <div id="dialog" title="Status">
        <p></p>
    </div>

    <script>
    function submit(){
        var name = $("#name").val();
        //console.log("Name : " + name);
        var email = $("#email").val();
        //console.log("email : " + email);
        var message = $("#message").val();
        //console.log("message : " + message);

        $.ajax({
            type: "post",
            url: "pages/contactus.php",
            data:{
                form:"sub",
                name:name,
                email:email,
                message:message
            },
            success: function (response) {
                if(response == "failed")
                {
                    $("#dialog p").html(" <br> Mail not sent, please fill all details properly.");
                }
                else
                {
                    $("#dialog p").html(" <br> Mail was sent, Thank You !!");
                }
                $( "#dialog" ).dialog({
                    resizable: false,
                    height: "auto",
                    width: 300,
                    modal: true,
                    buttons: {
                        Cancel: function() {
                        $( this ).dialog( "close" );
                        if(response != "failed")
                            window.location="../"
                        }
                    }
                });
            }
        });
    }
    </script>
<?php } ?>