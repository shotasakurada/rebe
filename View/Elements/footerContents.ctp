<script type="text/javascript">
    $(function(){
        $('#hnb_footer .acc').click(function() {
            $(this).toggleClass('active').next().slideToggle();
        });
    });

</script>

<!-- ここから新フッター 161220 -->
<footer>
  <div id="footer">
    <?php if ($this->layout !== 'entry') : ?>
   <!-- <p class="banner_pc mb30"><a href="/register/start/<?php echo ($year!=0)?$year:''; ?>"><img src="/img/hnb/newheader/banner_pc.jpg" alt="新規会員登録"></a></p>
    <p class="banner_sp mb30"><a href="/register/start/<?php echo ($year!=0)?$year:''; ?>"><img src="/img/hnb/newheader/banner_sp.jpg" alt="新規会員登録" width="100%"></a></p>
-->
    <?php endif; ?>

    <div class="clearfix mb30">
      <div class="pagetop clearfix">
        <a href="#">
          <p class="button"><img src="/img/hnb/newheader/pagetop.jpg" alt=""></p>
          <p class="text">PAGE TOP</p>
        </a>
      </div>
    </div>

    <div class="footer_content clearfix">
      <div class="footer_nav">
        <div class="clearfix">
          <ul class="inner01">
            <li><a href="/intern/<?php echo ($year!=0)?$year:''; ?>">インターン</a></li>
            <li><a href="/selection/<?php echo ($year!=0)?$year:''; ?>">本選考情報</a></li>
            <li><a href="/obog/<?php echo ($year!=0)?$year:''; ?>">OB/OG訪問</a></li>
            <li><a href="/column/<?php echo ($year!=0)?$year:''; ?>">就活対策</a></li>
            <li><a href="/seminar/<?php echo ($year!=0)?$year:''; ?>">セミナー</a></li>
            <li><a href="/info/about/<?php echo ($year!=0)?$year:''; ?>">ジョブトラとは</a></li>
          </ul>

          <ul class="inner02">
            <li><a href="/contact/<?php echo ($year!=0)?$year:''; ?>">FAQ・お問い合わせ</a></li>
            <li><a href="/contact/recruitment/<?php echo ($year!=0)?$year:''; ?>">採用担当の方はこちら</a></li>
            <li><a href="/info/terms/<?php echo ($year!=0)?$year:''; ?>">ご利用規約</a></li>
            <li><a href="https://www.realive.co.jp/company/" target="_blank">運営会社</a></li>
            <li><a href="/info/privacy/<?php echo ($year!=0)?$year:''; ?>">プライバシーポリシー</a></li>
            <li><a href="https://rebe-career.co.jp/" target="_blank">Rebe career</a></li>
          </ul>

          <p class="center inner02 mb30"><a href="/contact/<?php echo ($year!=0)?$year:''; ?>">FAQ・お問い合わせ</a>　<a href="/contact/recruitment/<?php echo ($year!=0)?$year:''; ?>">採用担当の方はこちら</a><br><br><a href="/info/terms/<?php echo ($year!=0)?$year:''; ?>">ご利用規約</a>　<a href="https://www.realive.co.jp/company/" target="_blank">運営会社</a>　<a href="/info/privacy/<?php echo ($year!=0)?$year:''; ?>">プライバシーポリシー</a>　<a href="https://rebe-career.co.jp/" target="_blank">Rebe career</a></p>

          <div id="footer_terminal">
            <p><a href="/<?php echo $default_before_year ?>/"><span><?php echo $default_before_year ?>年</span><br>卒業予定の方</a></p>
            <p><a href="/<?php echo $default_year ?>/"><span><?php echo $default_year ?>年</span><br>卒業予定の方</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <p class="center copy"><small>Copyright &copy; Realive Co., Ltd. All rights reserved.</small></p>

<script>
$(function() {
    $('.entry input').change(function() {
        $('.foot_bnr170606').hide();
    });
    $('.foot_bnr170606 .close').click(function(){
        $('.foot_bnr170606').hide();
    });
});
</script>

<?php if($this->name == 'CompanySeminars' && $this->action == 'detail') : ?>
  <?php
    ## 2019.09.05 added s.yonemoto
    ## 1421,1440,1454,1455 だったら新フッターを出す
    ## 2020.05.11 1645,1660,1663 added
    if($seminar['CompanySeminar']['id'] == "1421" || $seminar['CompanySeminar']['id'] == "1440" || $seminar['CompanySeminar']['id'] == "1454" || $seminar['CompanySeminar']['id'] == "1455" || $seminar['CompanySeminar']['id'] == "1645"  || $seminar['CompanySeminar']['id'] == "1660"  || $seminar['CompanySeminar']['id'] == "1663"){
   ?>
   <div class="fixed">
     <div class="pc-cv-area">
       <div class="pc-cv-inner">
         <div class="fixed-item">
           <img src="/img/seminar-banner/cv-gril.png" class="cv-gril" alt="">
           <p>参加予約は電話でも承っております。<br>お気軽にお問い合わせください。</p>
         </div>
         <div class="fixed-item">
           <img src="/img/seminar-banner/pc-fixed-tell.png" class="pc-cv-tell" alt="0066-9730-5003">
         </div>
         <div class="fixed-item">
           <a href="#entry_block" class="pc-cv-reserve"><span><img src="/img/seminar-banner/mail.png" alt="" class="mail-icon">今すぐセミナーに予約する</span></a>
         </div>
       </div>
     </div>
    <div class="sp-cv-area">
      <a href="tel:006697305003" class="sp-cv-tell"><span><img src="/img/seminar-banner/tell.png" alt="" class="tell-icon">電話する</span></a>
      <a href="#entry_block" class="sp-cv-reserve"><span><img src="/img/seminar-banner/mail.png" alt="" class="mail-icon">セミナー予約</span></a>
      <a href="http://nav.cx/zAd7BXM" class="sp-cv-line"><span><img src="/img/seminar-banner/line.png" alt="" class="line-icon">LINEで質問</span></a>
    </div>

   </div>
   <?php
    }else{
      //2019.11.13 added s.yonemoto
      //エージェント事業部の相談口を一本化したいとの事。
      if($seminar['CompanySeminar']['id'] == "1582" || $seminar['CompanySeminar']['id'] == "1583"){
        $footer_url = "/seminar/detail/1543?year=2021";
      }else{
        $footer_url = "#back_to_entry";
      }
   ?>
	<div class="foot_bnr170606 ft_180227">
  	<div class="foot_bnr_re">
      <div class="scroll-down">
        <a href="<?php echo $footer_url;?>"><span></span><span></span><span></span>今すぐセミナーに予約する</a>
        <?php
        //ここはもしかしたら実装で一旦ペンド
        if($this->request->is('mobile')){
          //echo "<br /><br /><br /><a style=\"background-color:#00B900;\" href=\"http://line.me/ti/p/%40ubm9230q\"><span></span><span></span><span></span>LINEの友達登録ボタンです</a>";
        }
        ?>
      </div>
  		<p class="close">
        <!-- <img src="/img/hnb/footer/pc/close.png" alt="閉じる"> -->
        ×
      </p>
  	</div>
  </div>
  <?php
    }
  ?>
<?php endif ?>

<?php
  ## 2019.08.01 ポート用マルジュタグ　本番のセミナーIDは1455 ステージングは1362
  if($this->name == 'CompanySeminars' && $this->action == 'detail'){
    if($seminar['CompanySeminar']['id'] == "1455"){
?>
<script>var gid=21;</script><script type="text/javascript" id="cats_script27" src="https://act-pt.catsys.jp/fpc/cookie_js.php" charset="UTF-8"></script>
<?php
    }
  }
?>


<?php if($this->name != 'CompanySeminars') : ?>
<?php if(empty($loginUser) && $this->layout !== 'entry') : ?>
<div class="foot_bnr170606">
  <div class="foot_bnr_re">
    <?php if(date('d') > 15) : ?>
   <!-- <p class="ttl">［ 登録期限は <?php //echo date('t') ?>日 まで！ ］</p> -->
    <?php endif; ?>
    <p class="read"><?php echo $ad1 ?></p>
    <p class="btn"><a href="<?php echo $adurl ?>"><?php echo $ad2 ?></a></p>
    <p class="close">
      <!-- <img src="/img/hnb/footer/pc/close.png" alt="閉じる"> -->
      ×
    </p>
  </div>
</div>
<?php endif; ?>
<?php endif ?>

</footer>
