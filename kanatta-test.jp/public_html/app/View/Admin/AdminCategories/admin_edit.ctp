<div class="bread">
    <?php echo $this->Html->link('カテゴリー', '/admin/admin_categories/setting') ?> &gt;
    <?php echo $this->Html->link('カテゴリー1 一覧', '/admin/admin_categories')?> >
    カテゴリー1 編集
</div>
<div class="setting_title">
    <h2>カテゴリー1の編集</h2>
</div>
<div class="container">
    <br>
    <?php echo $this->Form->create('Category') ?>
    <div class="form-group">
        <?php echo $this->Form->input('name', array(
                'class' => 'form-control', 'label' => 'カテゴリー名'
        )) ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('order', array(
            'class' => 'form-control', 'label' => '並び順（小さいほど上に表示）'
        )) ?>
    </div>
    <div class="form-group">
        <?php echo $this->Form->input('show_top_flag', array(
            'class' => 'form-control', 'label' => 'トップページに表示',
            'type' => 'select', 'options' => array(0 => '非表示', 1 => '表示する')
        )) ?>
    </div>
    <div class="form-group" style="text-align:center;">
        <button type="submit" class="btn btn-primary" style="width:200px;">登録</button>
    </div>
    <?php echo $this->Form->end() ?>
</div>
