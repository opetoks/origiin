<?php 
error_reporting(E_ALL);
session_start();
include('config.php');
include('components/fns/custom.php');
$stmt = getSettings();
$settings = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title><?php echo $settings['site_title']; ?></title>
  <link rel="shortcut icon" href="styles/assets/images/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href='styles/assets/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <link href='styles/assets/animate.css' rel='stylesheet' type='text/css'>
  <link href='styles/assets/custom_back.css' rel='stylesheet' type='text/css'>
  <script src='styles/assets/jquery.js' type='text/javascript'></script>
  <script src="styles/assets/wow.js"></script>
  <script src="styles/assets/wow.min.js"></script>
  <script type="text/javascript" src="styles/assets/bootstrap.min.js"></script>
  <script src='styles/assets/setting.js' type='text/javascript'></script>
 

</head>
<body>
  <div class="wrapper">
    
    <div class="bannerContainer">
      <div class="bannerInner-login fadeInRight wow">
        <div class="ctn-banner">
          <h3 stye="font-family: 'Anton', sans-serif;!important;"><span >brand new </span><br>
            investment <br>
            <span>platform </span></h3>
            <p><?php echo $settings['site_title']; ?> is made so even investors with zero trading experience are successfully making a profit. Our program, unlike any other, guarantees fix hourly interest for investors regardless of market conditions.</p>
            <h4>Earn up 40% 24 Hours Profit </h4>
          </div>
        </div>
      </div>

      <div class="profitContainer">
        <div class="profitInner">
          

        </div>
      </div>
    </div>

    <div class="becomeContainer">
      <div class="becomeInner fadeInRight wow">
        <div class="ctn-become">
          <p>The best investment plan of <script type="text/javascript"> var year = new Date(); document.write(year.getFullYear());</script>. You can earn<span> up 40% hourly.</span></p>
        </div>
      </div>
    </div>
    <div class="startedContainer">
      <div class="startedInner">
        <div class="ctn-started">
          <div class="started-row started-part1 fadeInLeft wow">
            <h3>Starter Plan</h3>
            <h1>6%</h1>
            <h2> Hourly For 24 Hours</h2>
            <p>Minimum Deposit: $1</p>
            <p>Maximum Deposit: $500</p>
            <a href="?a=deposit">deposit</a>
          </div>
          <div class="started-row started-part2 fadeInRight wow">
            <h3>premium Plan</h3>
            <h1>4%</h1>
            <h2> Hourly For 24 Hours</h2>
            <p>Minimum Deposit: $500</p>
            <p>Maximum Deposit: $1,000</p>
            <a href="?a=deposit">deposit</a>
          </div>
          <div class="started-row started-part3 fadeInRight wow">
            <h3>advanced Plan</h3>
            <h1>20%</h1>
            <h2> Hourly For 24 Hours</h2>
            <p>Minimum Deposit: $1,000</p>
            <p>Maximum Deposit: $3,000</p>
            <a href="?a=deposit">deposit</a>
          </div>
          <div class="started-row started-part4 fadeInRight wow">
            <h3>vip Plan</h3>
            <h1>40%</h1>
            <h2> Hourly For 24 Hours</h2>
            <p>Minimum Deposit: $3,000</p>
            <p>Maximum Deposit: $10,000</p>
            <a href="?a=deposit">deposit</a>
          </div>
        </div>
      </div>
    </div>








<div class="CalculateContainer">
  <div class="CalculateInner fadeInLeft wow">
    <div class="calu">

     
      <table class="cal">
        <th>
          <td>
            <lebel>Select Plan</lebel>
            <select id="calc_plan" style="
            border: 0px;
            padding: 6px;
            width: 110%;
            border-radius: 30px;
            text-transform: capitalize;
            letter-spacing: 0.5px;
            outline: none;
            margin-top:7px;">
            <option value="1"> 6% Hourly For 24 Hours</option>
            <option value="2">4% Hourly For 24 Hours</option>
            <option value="3">20% Hourly For 24 Hours</option>
            <option value="4"> VIP Hourly For 24 Hours</option>
          </select></td>
        </th>

        <th>
          <td>
            <lebel>Enter Amount</lebel>
            <input id="inv_amount" type="text" value="100"/>
          </td>
        </th>

        <th>
          <td>
            <lebel>Total Profit</lebel>
            <input id="net_profit" type="text" value="100" readonly=""/>
          </td>
        </th>

        <th>
          <td>
            <lebel>Total Percent</lebel>
            <input id="assign_per" type="text" value="100" readonly=""/>
          </td>
        </th>

        <th>
          <td>
            <lebel>Total Return</lebel>
            <input id="total_return" type="text" value="100" readonly=""/>
          </td>
        </th>

      </table>


    </div>
  </div>
</div>

<div class="contentTopContainer">
  <div class="contentTopInner">
    <div class="ctn-forexrial fadeInRight wow">
      <h1>Welcome to <span><?php echo $settings['site_title']; ?>  Investment</span></h1>
      <p>Looking for highest returns on your investments? <?php echo $settings['site_title']; ?>  Investment is an automatic online investment platform, part of <?php echo $settings['site_title']; ?>  Investment – team of professional traders focusing mainly on Bitcoin and other crypto currencies trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors.</p>
      <p>Headquartered in London in <script type="text/javascript"> var year = new Date(); document.write(year.getFullYear());</script>, <?php echo $settings['site_title']; ?>  Investment is already becoming the Panam's fastest growing trading company. Our name is synonymous with effective and profitable  trading solutions where our investors need little to no trading experience at all. With <?php echo $settings['site_title']; ?>  Investment, investors choose one of our four simple investment plans, make a deposit and sit back while our experts go to work. They can withdraw their profit any time and schedule withdrawals quickly and easily through our website. If you have been looking for an easy to use investment platform, choose <?php echo $settings['site_title']; ?>  Investment now and let our professionals help you choose an investment plan that meets your needs today!</p>
    </div>
  </div>
</div>


<div class="depositContainer">
  <div class="depositInner">
    <div class="depositLeft fadeInLeft wow">
      <h3>Last 10 Deposits <img src="styles/assets/images/ctn-ic5.png"></h3>
      <div class="ctn-diposit-part1">
        <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Deposit</th>
                <th>Charges</th>
            </tr>
        </thead>
          <tbody>
            <?php
              $returnDeposit = getDeposits();
              if($returnDeposit->rowCount() > 0) {
                $deposits = $returnDeposit->fetch();
                $x= 1;
                 // $payoutCount = mysqli_num_rows($payout);
                 do { 
                  echo
                  '<tr>
                    <td><span>'.$x.'</span></td>
                    <td><span>'.$deposits['username'].'</span></td>
                    <td><span>'.$settings['currency'].$deposits['final_amount'].'</span></td>
                    <td>'.$deposits['charge'].'</td>
                  </tr>';
                  $x++;
                } while ($deposits = $returnDeposit->fetch());
              } else {
                    echo'
                    <tr>
                      <td>No Data Found</td>
                      <td><span>N/A</span></td>
                      <td></td>
                    </tr>';
                }
                ?>
                </tbody>
          </table>
        </div>
      </div>
      <div class="depositRight fadeInRight wow">
        <h3>Last 10 withdrawals <img src="styles/assets/images/ctn-ic6.png"></h3>
        <div class="ctn-diposit-part1">
         <table>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Payout amount</th>
                      <th>Charges</th>
                  </tr>
              </thead>
				    		<tbody>
								<?php
                  $returnPayout = getPayouts();
                  if($returnPayout->rowCount() > 0) {
                    $payout = $returnPayout->fetch();
                    // $payoutCount = mysqli_num_rows($payout);
                    do {
                      echo
                      '<tr>
                        <td>'.$payout['user_id'].'</td>
                        <td><span>$'.$payout['user_id'].'</span></td>
                        <td><span>$'.$payout['user_id'].'</span></td>
                        <td>'.$payout['user_id'].'</td>
                      </tr>';
                    } while ($payout = $returnPayout->fetch());
                  } else {
                      echo'
                      <tr>
												<td>No Data Found</td>
												<td><span>N/A</span></td>
												<td></td>
											</tr>';
                  }
                ?>
																						
								</tbody>
				  </table>
        </div>
      </div>
    </div>
  </div>

  <div class="investmentContainer">
    <div class="investmentInner zoomIn wow">
      <h2><span><?php echo $settings['site_title']; ?>  Investment</span> BENEFITS</h2>
      <hr>
      <div class="ctn-inves-row">
        <div class="ctn-Instant Instant-part1">
          <h1>Professional Team</h1>
          <p>We are team of professional traders in Forex &amp; Crypto Exchange and Coins trading and Crypto Mining who know how to grab the profit end of the day.</p>
        </div>
        <div class="ctn-Instant Instant-part2">
          <h1>ddos protection</h1>
          <p>We are using one of most experienced , professional and trusted DDoS Protection and mitigation provider.</p>
        </div>
        <div class="ctn-Instant Instant-part3">
          <h1>COMODO SSL Security</h1>
          <p>Our website using Comodo SSL Security, SSL <br> encryption and that confirms that the presented content is the genuine and legitimate.</p>
        </div>
        <div class="ctn-Instant Instant-part4">
          <h1>UK Registered Company</h1>
          <p>We are a legal company registered in the UK providing its investment services to the members all around the world.</p>
        </div>
        <div class="ctn-Instant Instant-part5">
          <h1>Instant Withdrawals</h1>
          <p>Get your payment instantly as soon as you request it! Minimum withdrawal is $0.1. There is no fee for withdrawals of hourly interest.</p>
        </div>
        <div class="ctn-Instant Instant-part6">
          <h1>Great Customer Support</h1>
          <p>We understand how important having reliable support service is to you. Please don't hesitate to contact us should you have any questions and we will get back to you in 24 Hours!</p>
        </div>
      </div>
    </div>
  </div>
  <div class="primebitContainer">
    <div class="primebitInner zoomIn wow ">
      <h1><span>MULTI-LEVEL</span> Referral commission</h1>
      <div class="ctn-level fadeInLeft wow">
        <div class="livel-part">
          <h2>4<span>%</span></h2>
          <p>livel1</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>livel2</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>livel3</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>livel4</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>livel5</p>
        </div>
      </div>
      <div class="text-level fadeInRight wow">
        <p>At <?php echo $settings['site_title']; ?>  Investment, we believe there is no better advertisement than satisfied clients. No wonder that majority of our new clients are affiliates from our existing clients. We are proud that our clients like to recommend our financial service to others. Because of this, we are pleased to offer one of the strongest online affiliate programs in the financial service industry, with a high commission rate, customized tools and reports, and timely commission payouts. </p>
        <p><?php echo $settings['site_title']; ?>  Investment is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to tell your friends, relatives or colleagues about our company. We offer MULTI-LEVELreferral commissions: The first level of direct referrals from you will entitle you to a commission of 4%, and second level gives you commission of 0.5% and third level is 0.5% . You can surely make a lot of money from the referral commissions you get!</p>
      </div>
    </div>
  </div>
  <div class="solidContainer">
    <div class="solidInner zoomIn wow">
      <div class="solid"> <a href="#" class="solid1"></a> <a href="#" class="solid2"></a> <a href="#" class="solid3"></a> <a href="#" class="solid4"></a> <a href="#" class="solid5"></a> <a href="#" class="solid6"></a> <a href="#" class="solid7"></a> <a href="#" class="solid8"></a> </div>
    </div>
  </div>
  <div class="footerContainer">
    <div class="footerInner">
      <div class="ft-row1">
        <h3>&copy; <script type="text/javascript"> var year = new Date(); document.write(year.getFullYear());</script>. <a href="?a=home"><?php echo $settings['site_title']; ?> </a> ALL RIGHTS RESERVED</h3>
      </div>
      <div class="ft-part1"> <a href="?a=about">ABOUT US</a> <a href="?a=news">NEWS</a> <a href="?a=faq">FAQ</a> <a href="?a=support">support</a> <a href="?a=rules">terms</a><a href="?a=paidout">ALL PAID </a></div>
    </div>
  </div>
</body>

</html>
