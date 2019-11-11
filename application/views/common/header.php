<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
//echo "<pre>";print_r(check_user_authentication());;
//$this->session->userdata('user_id');
 // echo $UserId=$this->session->userdata('user_id');
   $this->load->view('common/css');
?>
  <body class="pages-index">

    <!-- Sliding div starts here -->
<div class="sidebar-contact">
    <img src="<?php echo base_url();?>/default/img/call.png" class="toggle">
    <h2>Contact Us</h2>
    <div class="scroll">
    <form class="form form--contact form--contact-page custom-form" method="post" enctype="multipart/form-data">
        <div class="form__box form__box--contact-page">
            <div class="form-group">
                <input type="text" class="form-control" name="UserName" maxlength="255" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="EmailAddress" maxlength="255" placeholder="Email Address" required>
            </div>
            <div class="form-group form__appearance">
                <select class="form__select" name="QueryTypeId">
                <option value="">Query Type</option>
                <?php
               // $select1=mysql_query("select * from tblquerytype where IsActive='1'");
               // while($r1=mysql_fetch_array($select1))
               // {
                ?>
                <option value="<?php //echo $r1['QueryTypeId'];?>"><?php //echo $r1['QueryType'];?></option>          
                <?php
               // }
                ?>
                </select>                   
            </div>
           <div class="form-group" required>
                <textarea class="form__textarea" name="MessageQuery" maxlength="65535" placeholder="Message"></textarea>
            </div>

            <button class="form__submit form__submit--contact form__submit--contact-page" type="submit" name="quote">
                Apply Now 
                </button>
          
        </div>
    </form>
    </div>
  </div>
<!-- Sliding div ends here -->

<div id="o-wrapper" class="wrapper overflow-hidden">
  <nav class="nav">
    <div class="container">
      <div class="nav__logo">
        <a class="logo logo-white" href="<?php echo base_url();?>"></a>
            </div>
  <div class="nav__wrapper">        
    <ul class="nav__list">
        <li class="menu-item">
                <a href="<?php echo base_url();?>" class="menu-item-link">Home</a>
            </li>
            <li class="menu-item has-dropdown">
                <a href="#" class="menu-item-link">What We Do</a>
                <div class="sub-menu-wrapper">
                    <div class="sub-menu-container">
                        <div class="article-container">
                            <div class="article__item">
                                <div class="article__content">
                                    <a href="#" class="article__link">
                                        <img src="<?php echo base_url();?>default/img/menu-contents/1.jpg"
                                             alt="Clients" class="article__img">
                                        <p class="article__description"></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="sub-menu-list-container">
                            <ul class="sub-menu">
                                <div class="sub-menu__wrapper">
                                     <li class="menu-item">
                                            <a href="#" class="sub-item-link">
                                               Web Solutions <i class="isoi-angle-right "></i>
                                            </a>
                                            <div class="sub-menu__list-wrapper">
                                                    <ul class="sub-menu__list">
                                                        <li class="sub-menu__list-item">
                                                            <a href="web-development.php" class="sub-item-link sub-item-link--list">Web Development</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="web-design.php" class="sub-item-link sub-item-link--list">Web Design</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="digital-marketing.php" class="sub-item-link sub-item-link--list">Digital Marketing</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="mobile-application.php" class="sub-item-link sub-item-link--list">Mobile Application</a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </li>
                                </div>
                                <div class="sub-menu__wrapper">
                                     <li class="menu-item">
                                            <a href="#" class="sub-item-link">
                                               IT Services <i class="isoi-angle-right "></i>
                                            </a>
                                            <div class="sub-menu__list-wrapper">
                                                    <ul class="sub-menu__list">
                                                        <li class="sub-menu__list-item">
                                                            <a href="msp-services.php" class="sub-item-link sub-item-link--list">MSP Services</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="workstations-and-point-of-sale-systems.php" class="sub-item-link sub-item-link--list">Workstation & POS Systems</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="employee-productivity.php" class="sub-item-link sub-item-link--list">Employee Productivity</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="security-and-monitoring.php" class="sub-item-link sub-item-link--list">Security & Monitoring</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="network-infrastructure.php" class="sub-item-link sub-item-link--list">Network Infrastructure</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="data-protection-and-migration.php" class="sub-item-link sub-item-link--list">Data Protection & Migration</a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </li>
                                </div>
                                <div class="sub-menu__wrapper">
                                     <li class="menu-item">
                                            <a href="#" class="sub-item-link">
                                               Customer Support <i class="isoi-angle-right "></i>
                                            </a>
                                            <div class="sub-menu__list-wrapper">
                                                    <ul class="sub-menu__list">
                                                        <li class="sub-menu__list-item">
                                                            <a href="inbound-call-center-services.php" class="sub-item-link sub-item-link--list">Inbound</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="outbound-call-center.php" class="sub-item-link sub-item-link--list">Outbound</a>
                                                        </li>
                                                        <li class="sub-menu__list-item">
                                                            <a href="live-chat.php" class="sub-item-link sub-item-link--list"> Live Chat</a>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </li>
                                </div>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="menu-item">
                <a href="industries.php" class="menu-item-link">Who We Serve</a>
            </li>
            <li class="menu-item">
                <a href="blog.php" class="menu-item-link">Blog</a>
            </li>
            <li class="menu-item">
                <a href="portfolio.php" class="menu-item-link">Portfolio</a>
            </li>
            <li class="menu-item has-dropdown">
                <a href="#" class="menu-item-link">Who We Are</a>
                <div class="sub-menu-wrapper">
                    <div class="sub-menu-container">
                        <div class="article-container">
                            <div class="article__item">
                                <div class="article__content">
                                    <a href="#" class="article__link">
                                        <img src="<?php echo base_url();?>default/img/menu-contents/1.jpg"
                                             alt="Clients" class="article__img">
                                        <p class="article__description"></p>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="sub-menu-list-container">
                            <ul class="sub-menu">
                                <div class="sub-menu__wrapper">
                                        <li class="menu-item">
                                            <a href="about.php#heroAbout"  data-image="<?php echo base_url();?>default/img/menu-items/1.jpg"
                                               data-descr=""
                                               data-link="<?php echo base_url();?>default/img/menu-items/1.jpg" data-alt="Our Сlients Image" class="sub-item-link">
                                                About </i>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about.php#mission"  data-image="<?php echo base_url();?>default/img/menu-items/1.jpg"
                                               data-descr=""
                                               data-link="<?php echo base_url();?>default/img/menu-items/1.jpg" data-alt="Our Сlients Image" class="sub-item-link">
                                                Our Mission </i>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about.php#vision"  data-image="img/menu-items/1.jpg"
                                               data-descr=""
                                               data-link="<?php echo base_url();?>default/img/menu-items/1.jpg" data-alt="Our Сlients Image" class="sub-item-link">
                                                Our Vision</i>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about.php#wedo"  data-image="<?php echo base_url();?>default/img/menu-items/1.jpg"
                                               data-descr=""
                                               data-link="<?php echo base_url();?>default/img/menu-items/1.jpg" data-alt="Our Сlients Image" class="sub-item-link">
                                                What We Do</i>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="career.php"  data-image="<?php echo base_url();?>default/img/menu-items/1.jpg"
                                               data-descr=""
                                               data-link="<?php echo base_url();?>default/img/menu-items/1.jpg" data-alt="Our Сlients Image" class="sub-item-link">
                                                Career</i>
                                            </a>
                                        </li>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            
            </ul>     
            </div>
         <div class="nav__btn">
        <a class="get-touch btn" href="<?php echo base_url();?>home/contact_us">Contact Us</a><a id="c-button--push-left" href="#" class="sandwich menu-btn"></a>
      </div>
    </div>
  </nav>

  


 