<div class="bannerContainer">
      <div class="bannerInner fadeInRight wow">
        <div style="float:right;width:600px; margin: 10px 20px 10px 20px;">
            <img src="styles/assets/images/favicon-white.png" width="300px" class="rotate "/>  

            <div class="banner-btt" style="padding-top:73px">
              <a href="?a=login" class="bn-btt1">Member Login</a>
              <a href="?a=signup" class="bn-btt2">Registration</a>
            </div>
        </div>
        <div class="ctn-banner">
            <h3 stye="font-family: 'Anton', sans-serif;!important;"><span >brand new </span><br>
              investment <br>
              <span>platform </span>
            </h3>
            <p><?php echo $settings['site_title']; ?> is made so even investors with zero trading experience are successfully making a profit. Our program, unlike any other, guarantees fix hourly interest for investors regardless of market conditions.</p>
            <h4>Earn up 40% 24 Hours Profit </h4>
            
            
          </div>
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
												<td>No Withdrawal yet</td>
											</tr>';
                  }
                ?>
																						
								</tbody>
				  </table>
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
          <p>level1</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>level2</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>level3</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>level4</p>
        </div>
        <div class="livel-img">
          <img src="styles/assets/images/call-ic2.png">
        </div>
        <div class="livel-part">
          <h2>0.5<span>%</span></h2>
          <p>level5</p>
        </div>
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