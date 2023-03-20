<?php
require "../server/configure.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Pala Booking</title>
    <link rel="stylesheet" href="../static/css/index.css">
</head>
<body>
    <div class="scroll-top">
        <p class="scroll-top-btn">
            <span>&#10096;</span>
        </p>
    </div>
    <?php include "../nav.php";?>
    <div class="container top-110">
        <div class="container-4">
            <div class="image-fluid">
                <h1>Book AppointMent</h1>
            </div>
        </div>
    </div>
    <div class="more-info">
        <div class="info-wrapper s">
            <div class="service-div">
                <div class="service">
                    <p>NAIL POLISHES</p>
                    <h1>Hand Treatment</h1>
                </div>
            </div>
            <div class="my-info display-flex-ordinary">
            <?php 
            $services = $conn->query("SELECT service_id, category_name, service_name, pricing, image_banner from services ");

            if($services->num_rows < 0)
            {

            }else{
                while($service_data = $services->fetch_assoc()){
                    ?>
                    <div class="col-3 col-s-6 col-m-4">
                    <a href="<?php echo $service_data['service_id'];?>">
                        <div class="service-card">
                            <div class="inner-service-wrapper">
                                <div class="image-banner">
                                    <img src="../assets/<?php echo $service_data['image_banner'];?>" alt="">
                                </div>
                                <div class="service-desc">
                                    <div class="service-category">
                                        <p><?php echo $service_data['category_name'];?></p>
                                    </div>
                                    <div class="service-name">
                                        <h2><?php echo $service_data['service_name'];?></h2>
                                    </div>
                                    <div class="pricing">
                                    <?php echo floatval($service_data['pricing']);?> $
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                }
            }
            
            ?>

                
            </div>
        </div>
    </div>
    <div class="more-info x">
        <div class="info-wrapper s ">
            <div class="service-div">
                <div class="service">
                    <p>NAIL POLISHES</p>
                    <h1>Other Services</h1>
                </div>
            </div>
            <div class="my-info display-flex-ordinary">
                <style>
                    .display-flex-ordinary{
                        flex-wrap:wrap;
                    }
                </style>
                <?php
                $other_services = $conn->query("SELECT os_name, os_pricing from other_services");
                if($other_services->num_rows < 1){

                }else{
                    while($other_services_data = $other_services->fetch_assoc()){
                        ?>
                          <div class="col-6">
                            <div class="service-box-footer">
                                <div class="inner-sec">
                                    <div class="o-name">
                                        <p><?php echo $other_services_data['os_name'];?></p>
                                    </div>
                                    <hr>
                                    <div class="o-price">
                                    
                                        <p> <?php echo $other_services_data['os_pricing']." ";?>$</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>

    </div>

    <?php require "../footer.php";?>
    <script src="../static/script/index.js"></script>
</body>
</html>