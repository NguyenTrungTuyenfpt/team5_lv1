<?php  
    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Subject']) && isset($_POST['Message'])){
        $name = $_POST['Name'];
        $email = $_POST['Email'];
        $sub = $_POST['Subject'];
        $mess = $_POST['Message'];
        
        Sentmail( $email, $name,$sub,$mess);

    }else{
        echo "Please enter";
    }
?>



<section class="contact" >
        <div class="contact-container">
            <div class="left">
                <div class="text">
                    <h3 >THE BOYS COFFEE</h3>
                    <p>Địa chỉ: Lầu 3 - Tòa nhà Lữ Gia - Số 70 Lữ Gia - P.15 - Q.11, Tp.HCM </p>
                    <p>Số điện thoại: 0101010100</p>
                    <p>Email: theboys@gmail.vn</p>
                    
                </div>
                <div class="form">
                    <form  method="post">
                        <input type="text" name="Name" placeholder="Name" required="">
                        <input type="email" class="email" name="Email" placeholder="Email" required="">
                        <input type="text" name="Subject" placeholder="Subject" required="">
                        <textarea name="Message" placeholder="Message" required=""></textarea>
                        <div class="sm">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
             

            </div>

            <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.444093308435!2d106.62348197451807!3d10.853788157763072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1723027505108!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

