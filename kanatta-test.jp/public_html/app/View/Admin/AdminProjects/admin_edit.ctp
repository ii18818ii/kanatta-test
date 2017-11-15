<div class="bread">
    <?php echo $this->Html->link('プロジェクト', '/admin/admin_projects/') ?> &gt;
    <?php echo $this->Html->link('プロジェクト一覧', '/admin/admin_projects/') ?> &gt;
    <?php echo $this->Html->link('プロジェクト編集', '/admin/admin_projects/edit/'.$project['Project']['id']) ?> &gt;
    基本情報
</div>
<div class="setting_title">
    <h2>プロジェクト基本情報の編集</h2>
</div>
<?php echo $this->element('admin/setting_project_menu', array('mode' => 'base')) ?>

<div class="setting_box">
    <div class="project_edit">
        <div class="container">

            <div class="col-md-6">
                <h4>基本情報</h4>

                <?php echo $this->Form->create('Project', array(
                        'type' => 'file', 'inputDefaults' => array(
                                'class' => 'form-control', 'label' => false, 'div' => false
                        ),
                )); ?>

                <div class="form-group">
                    <?php echo $this->Form->input('project_name', array('label' => 'プロジェクト名')) ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('category_id', array('label' => 'カテゴリー1')); ?>
                </div>
                <div class="form-group">
                    <?php echo $this->Form->input('area_id', array('label' => 'カテゴリー2')); ?>
                </div>

                <?php if($project['Project']['opened'] == 0): ?>
                <div class="form-group">
                    <?php echo $this->Form->input('pay_pattern',
                        array('label' => '決済パターン', 'type' => 'select', 'options' => Configure::read('PAY_PATTERN')))?>
                </div>
                <div class="form-group">
                    <label>目標の表示</label>
                    <?php echo $this->Form->input('no_goal',
                        array('type' => 'select', 'options' => array(0 => '表示', 1 => '非表示'))); ?>
                    ※非表示に設定した場合、All IN型でも募集期限が無期限になります。
                </div>
                <?php endif;?>

                <div class="form-group">
                    <label>目標金額</label>
                    <div class="input-group">
                        <?php echo $this->Form->input('goal_amount'); ?>
                        <span class="input-group-addon">円</span>
                    </div>
                    ※決済パターンがAll or Nothingか、All Inの場合は必須入力<br>
                    ※目標の表示が非表示で、All INの場合は入力不要
                </div>
                <div class="form-group">
                    <label>目標人数</label>
                    <div class="input-group">
                        <?php echo $this->Form->input('goal_backers'); ?>
                        <span class="input-group-addon">人</span>
                    </div>
                    ※決済パターンが月額課金の場合は必須入力<br>
                    ※目標の表示が非表示の場合、入力不要
                </div>

                <?php if($project['Project']['opened'] == 0): ?>
                    <div class="form-group">
                        <label>募集期間</label>
                        <div class="input-group">
                            <?php echo $this->Form->input('collection_term') ?>
                            <span class="input-group-addon">日</span>
                        </div>
                        ※決済パターンが月額課金の場合は、無期限となります。
                    </div>
                <?php endif ?>

                <div class="form-group">
                    <?php echo $this->Form->input('description', array(
                            'type' => 'textarea', 'row' => 5, 'label' => 'プロジェクト概要'
                    )); ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->input('return', array(
                            'type' => 'textarea', 'row' => 5, 'label' => '支援パターン概要'
                    )) ?>
                </div>

                <div class="form-group">
                    <?php echo $this->Form->input('contact', array(
                            'type' => 'textarea', 'row' => 5, 'label' => '連絡先'
                    )) ?>
                </div>

                <div class="col-xs-offset-2 col-xs-8">
                    <?php echo $this->Form->submit('更新', array('class' => 'btn-block btn btn-primary')) ?>
                </div>
                <br><br>
                <?php echo $this->Form->end(); ?>
            </div>


            <div class="col-md-6">
                <h4>作成ユーザー</h4>
                <div class="clearfix">
                    <div class="user_img">
                        <a href="<?php echo $this->Html->url('/users/view/'.$project['User']['id']) ?>" target="_blank">
                            <?php echo $this->User->get_user_img_md_from_user_id($project['User']['id']) ?>
                        </a>
                    </div>
                    <div class="user_info">
                        <div class="user_name">
                            <a href="<?php echo $this->Html->url('/users/view/'.$project['User']['id']) ?>"
                               target="_blank">
                                <?php echo h($project['User']['nick_name']) ?>
                            </a>
                        </div>
                        <?php echo h($project['User']['email']) ?>
                        <br><br>
                        <a href="<?php echo $this->Html->url('/admin/admin_projects/change_user/'
                                                             .$project['Project']['id']) ?>" class="btn btn-primary">作成ユーザ変更</a>
                    </div>
                </div>

                <?php if($project['Project']['opened'] == 1): ?>
                    <h4>プロジェクト情報</h4>
                    <h5>決済パターン</h5>
                    <?php
                    $pay_patterns = Configure::read('PAY_PATTERN');
                    echo $pay_patterns[h($project['Project']['pay_pattern'])]
                    ?>
                    <h5>募集開始日時</h5>
                    <?php echo date('Y年m月d日 H時i分', strtotime(h($project['Project']['collection_start_date']))) ?>
                    <?php if($project['Project']['pay_pattern'] != MONTHLY && !$project['Project']['no_goal']):?>
                        <h5>募集終了日時</h5>
                        <?php echo date('Y年m月d日 H時i分', strtotime(h($project['Project']['collection_end_date']))) ?>
                    <?php endif;?>
                    <h5>手数料率</h5>
                    <?php echo h($project['Project']['site_fee']) ?>%
                <?php endif ?>

                <h4>プロジェクトの削除</h4>
                <div class="col-xs-offset-1 col-xs-10">
                    <?php echo $this->Form->postLink(__('<span class="el-icon-trash"></span> プロジェクトを削除する'), array(
                            'action' => 'admin_delete', $project['Project']['id']
                    ), array(
                            'class' => 'btn btn-danger btn-block', 'style' => 'height:50px; padding-top:15px;',
                            'escape' => false
                    ), __('削除しますか？')); ?>
                    　
                </div>

                <div class="col-xs-offset-1 col-xs-10">
                    <?php echo $this->Form->postLink(__('<span class="el-icon-trash"></span> テストプロジェクトなので無条件で削除する'), array(
                        'action' => 'admin_delete_test_pj', $project['Project']['id']
                    ), array(
                        'class' => 'btn btn-success btn-block', 'style' => 'height:50px; padding-top:15px;',
                        'escape' => false
                    ), __('テストプロジェクトとして無条件で関連するデータも含めてすべて削除されます。削除してよろしいですか？')); ?>
                    　
                </div>
            </div>
        </div>
    </div>

</div>

