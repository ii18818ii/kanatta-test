<div class="top_padding"></div>
<div class="user_info">
    <div>
        <?php echo $this->User->get_user_img_md($auth_user, 24) ?>
    </div>
    <div class="nick_name">
        <?php echo h($auth_user['User']['nick_name']) ?>
    </div>
    <div class="profile_btn">
        <button onclick="location.href='<?php echo $this->Html->url('/profile/'.$auth_user['User']['id']) ?>';"
                class="btn btn-xs">プロフィール確認
        </button>
    </div>
</div>
<div class="header_content clearfix">

    <div class="menu">
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/mypage') ?>';">
            <span class="el-icon-home"></span>ホーム
        </div>
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/users/edit') ?>';">
            <span class="el-icon-adult"></span>プロフィール
        </div>
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/messages') ?>';">
            <span class="el-icon-envelope"></span>メッセージ
        </div>
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/card') ?>';">
            <span class="el-icon-credit-card"></span>カード
        </div>
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/favourite_projects') ?>';">
            <span class="el-icon-heart"></span>お気に入り
        </div>
        <div class="mypage_menu" onclick="location.href='<?php echo $this->Html->url('/comments') ?>';">
            <span class="el-icon-comment"></span>コメント
        </div>
    </div>
</div>

<script type="text/javascript">
$(function(){
  $('.mypage_menu').on('click', function() {
    if ($(this).prop('menu-active')){
        // 一旦全てをクリアして再チェックする
        $('.mypage_menu').prop('menu-active', false);
        $(this).prop('menu-active', true);
    }
  });
});
</script>