<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        header("Location: ./student.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body>
    <div class="card container">
        <div class="row justify-content-start align-items-start g-2 pb-3">
            <div class="col">
                <div class="row justify-content-center align-items-center g-2 mt-1">
                    <a href="./student.php" class="btn btn-warning w-50">กลับ</a>
                </div>
            </div>
            <div class="col"></div>
            <div class="col">
                <div class="row justify-content-center align-items-center g-2 mb-3">
                    <h1 class="text-end">ระบบจัดการนักศึกษา</h1>
                    <h5 class="text-end">แก้ไขนักศึกษา</h5>
                    <h6 class="text-end ">กรุณาเลือกทำรายการด้านล่าง</h6>
                </div>
                <div class="row justify-content-center align-items-center g-2 border-top">
                    <h5 class="text-center">รายชื่อนักศึกษา</h5>
                </div>
                <?php
                echo "
                            <div class=\"row justify-content-center align-items-center g-2\">
                                <p class=\"col text-center\">เลขนักศึกษา</p>
                                <p class=\"col text-center\">ชื่อ</p>
                                <p class=\"col text-center\">นามสกุล</p>
                            </div>
                            <form method=POST onsubmit=\"return validateForm()\">
                ";
                $conn = new mysqli("localhost", "root", "", "p106");
                $result = $conn->query("SELECT * FROM student");
                while ($r = $result->fetch_assoc()) {
                    echo "   <div class=\"row justify-content-center align-items-center g-2 border-top\">
                                <input type=hidden name=\"oldid[]\" value=$r[stid]>
                                <input type=text name=\"stid[]\" class=\"col text-center form-control\" value=$r[stid]>
                                <input type=text name=\"fname[]\" class=\"col text-center form-control\"value=$r[fname]>
                                <input type=text name=\"lname[]\" class=\"col text-center form-control\"value=$r[lname]>
                            </div>
                    ";
                }

                echo"
                            <div class=\"row justify-content-center align-items-center g-2 border-top\">
                                <input type=submit value=บันทึก name=submit class=\"btn btn-primary\">
                            </div>
                            </form>
                ";
                
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    if(isset($_POST['submit'])){
                        $oldid=$_POST['oldid'];
                        $stid=$_POST['stid'];
                        $fname=$_POST['fname'];
                        $lname=$_POST['lname'];
                        $conn = new mysqli("localhost", "root", "", "p106");
                        foreach($stid as $i=>$s){
                            $conn->query("UPDATE student SET stid='$s', fname='$fname[$i]', lname='$lname[$i]' WHERE stid='$oldid[$i]'");
                            
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    function validateForm(){
        const cf=confirm("คุณต้องการยืนยันที่จะบันทึกข้อมูลใช่ไหม");
        if(cf){
            return true;
        }else{
            return false;
        }
}
</script>