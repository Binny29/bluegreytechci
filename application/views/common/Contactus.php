<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
?>

   <!--SECTION START-->
    <section class="hero hero--600" style="background-image:url(<?php echo base_url();?>default/img/services/banner.jpg);">
        <div class="container">
            <div class="hero__content">
                <h1 class="title title--uppercase">
                    <span class="title__preheader title__preheader--tag">Contact Us</span>
                    Get In Touch</h1>
                <p class="hero__lead">Get in touch with us for your Web Design, Website Developing, Mobile Developing, SEO and IT consulting services. We would be really happy to hear from you!  </p>
            </div>
        </div>
    </section> 

    <section id="" class=" cemetery__title--center cemetery cemetery-about panel hide">
        <div class="container" style="opacity: 1;">
            <div class="cemetery__title cemetery__title--center">
                <h2>Contact Us</h2>
                                <p class="description">Let’s talk about your business ideas and our expert team will help you to create the software and website of your dreams. We appreciate your business and guarantee a response within 24 business hours which would include our packages and pricing. Contact us at the below mentioned numbers or fill in the form below and we’ll be in touch very soon.</p>
                        </div>
            <div id="cemetery" class="owl-carousel owl-theme owl-loaded owl-drag"></div>
        </div>
    </section>

    <section class="form-wrap form-wrap--contact-page">
        <div class="container">
             <center>
                <div class="alert alert-danger" id="email_error" style="display: none;"><strong>Your record was not inserted. </strong> 
                </div>
            </center> 
            <center><div class="alert alert-success" id="insert_rec" style="display: none;">
                        <strong>Thank you for your note. We will contact you within 3 business days.</strong>
                    </div>    
            </center>
            <center><div class="alert alert-danger" id="rec_not_inserted" style="display: none;"><strong>Your record was not inserted. </strong> 
            </div>
            </center>
            <h2 class="enquiry_info">LEAVE US A MESSAGE</h2>
            <div class="form-wrap__flexbox form-wrap__flexbox--contact-page">
                <form id="myform2" class="form form--contact form--contact-page" method="post">
                    <div class="form__box form__box--contact-page">
                        <div class="form-group">
                            <input type="text" class="form-control" name="FirstName" maxlength="100" required placeholder="First Name" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="LastName" maxlength="100" required placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="EmailAddress" maxlength="100" required placeholder="Email Address">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="MobileNumber" maxlength="13" minlength="10" required placeholder="Work Phone" digits="">
                        </div>
                        <div class="form-group form__appearance">
                                <input type="hidden" name="CountryName" value="" id="CountryName">
                            <select class="form__select" name="CountryId" required id="CountryId">
                                <option value="">Country</option>
                                <?php
                                // $select1=mysql_query("select * from tblcountry where IsActive='1'");
                                // while($r1=mysql_fetch_array($select1))
                                // {
                                ?>                          
                                <option value="<?php //echo $r1['CountryId'];?>"><?php //echo $r1['CountryName'];?></option>                    
                                <?php
                               // }
                                ?>
                            </select>                  
                        </div>
                        <div class="form-group form__appearance">
                             <input type="hidden" name="IntrestedType" value="" id="IntrestedType">
                            <select class="form__select" name="IntrestedTypeId" required id="IntrestedTypeId">
                                <option value="">I am interested in</option>
                                <?php
                                // $select1=mysql_query("select * from tblintrestedtype where IsActive='1'");
                                // while($r1=mysql_fetch_array($select1))
                                // {
                                ?>                             
                                <option value="<?php //echo $r1['IntrestedTypeId'];?>"><?php //echo $r1['IntrestedType'];?>                      </option>                  
                                <?php
                                //}
                                ?>
                                </select>                    
                            </div>
                        <div class="form-group">
                            <textarea class="form__textarea" name="DescriptionMessage" placeholder="Message" required></textarea>
                        </div>
                       
                        <div class="form__footer" style="display: none;">
                            <div class="form-group upload-wrapper js-emptyFiles form-choose-file">
                                <input type="file" id="attach" name="attach"
                                       data-label="Attach file">
                            </div>

                        </div>
                       
                        <center><div class="g-recaptcha" data-sitekey="6LcB7GwUAAAAANhKfwLhOdOZMPPHefh8F_tQyczz"></div><br /></center>
                        <button class="form__submit form__submit--contact form__submit--contact-page" name="contact" type="submit">Talk to our team</button>
                       
                       
                    </div>
                </form>

                <div class="contact_new_address">
                    <div class="address-bar">
                        <div class="heading_add">
                            <div class="head_contnt">
                                <i class="icofont-location-pin"></i>
                                <h2>USA Office</h2>
                            </div>
                        </div>
                        <div class="row">                    
                        <div class="address_connect  col-sm-12">
                        <h4>2905 Queen City Dr,<br>Suites E, Charlotte, NC 28208</h4>
                        <h4><a href="tel:+1 (704)-457-7000">+1 (704)-457-7000</a></h4>
                        <h4><a href="mailto:info@bluegreytech.com">info@bluegreytech.com</a></h4>
                        </div>
                        <div class=" col-sm-12">
                         <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118111.00365906462!2d73.0977960998499!3d22.317017261376908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc616b36a4a4d%3A0x7f9ebea5908e21c2!2sNilay+Infotech+Private+Limited!5e0!3m2!1sen!2sin!4v1530274737907" width="100%" height="200" frameborder="0" style="border: 0" allowfullscreen=""></iframe-->
                        </div>
                        </div>

                       
                    </div>
                    <div class="address-bar">
                        <div class="heading_add">
                            <div class="head_contnt">
                                <i class="icofont-location-pin"></i>
                                <h2>CANADA Office</h2>
                            </div>
                        </div>
                        <div class="row">                    
                        <div class="address_connect  col-sm-12">
                        <h4>5925 Airport Road, Suite 200,<br> Mississauga, Ontario L4V  1W1</h4>
                        <h4><a href="tel:+1 (647)-947-3371">+1 (647)-947-3371</a></h4>
                        <h4><a href="mailto:info@bluegreytech.com">info@bluegreytech.com</a></h4>
                        </div>
                        <div class=" col-sm-12">
                         <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118111.00365906462!2d73.0977960998499!3d22.317017261376908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc616b36a4a4d%3A0x7f9ebea5908e21c2!2sNilay+Infotech+Private+Limited!5e0!3m2!1sen!2sin!4v1530274737907" width="100%" height="200" frameborder="0" style="border: 0" allowfullscreen=""></iframe-->
                        </div>
                        </div>

                       
                    </div>
                    <div class="address-bar">
                        <div class="heading_add">
                            <div class="head_contnt">
                                <i class="icofont-location-pin"></i>
                                <h2>India Office</h2>
                            </div>
                        </div>
                        <div class="row">                    
                        <div class="address_connect  col-sm-12">
                        <h4>408, Atlantis, Above Jasmin Mobile,<br> Near Genda Circle, Subhanpura,<br> Vadodara, Gujarat  390007</h4>
                        <h4><a href="tel:+91 81608 38603">+91 81608 38603</a></h4>
                        <h4><a href="mailto:info@bluegreytech.com">info@bluegreytech.com</a></h4>
                        </div>
                        <div class=" col-sm-12">
                         <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118111.00365906462!2d73.0977960998499!3d22.317017261376908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc616b36a4a4d%3A0x7f9ebea5908e21c2!2sNilay+Infotech+Private+Limited!5e0!3m2!1sen!2sin!4v1530274737907" width="100%" height="200" frameborder="0" style="border: 0" allowfullscreen=""></iframe-->
                        </div>
                        </div>

                       
                    </div>
                     
                </div>



            </div>
        </div>
    </section>
    <!--SECTION END-->

   

			
<?php 
 $this->load->view('common/footer');
?>

<script type="text/javascript">
    $("#contact_form").validate(
    {
    rules:{  
        username:{
          required: true,

        },     
        email:{
          required: true,
          email: true
        },
         phone:{
          required: true,
          digits: true
        },
        subject:{
           required: true,         
        },
        message:{
           required: true,  
        },
        


      
       
    },
    
    errorPlacement: function (error, element) {

         console.log('dd', element.attr("name"))
            if (element.attr("name") == "assessment") {
                error.appendTo("#assessmenterror");
            }else if(element.attr("name") == "careerchoice"){
               error.appendTo("#careerchoiceerror");
            }
            else{
                error.insertAfter(element)
            }
        }
    
});

</script>