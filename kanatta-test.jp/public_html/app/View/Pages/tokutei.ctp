<div class="about_box_wrap">
    <div class="about_box">
        <h1>特定商取引法に基づく表記</h1>
        <dl>
            <dt>事業者</dt>
            <dd>
                <?php echo h($setting['company_name']) ?>
            </dd>
        </dl>
        <dl>
            <dt>運営責任者</dt>
            <dd>
                <?php echo h($setting['company_ceo']) ?>
            </dd>
        </dl>
        <dl>
            <dt>所在地</dt>
            <dd>
                <?php echo h($setting['company_address']) ?>
            </dd>
        </dl>
        <dl>
            <dt>電話番号</dt>
            <dd>
                <?php echo !empty($setting['company_tel']) ? h($setting['company_tel']) : '準備中'?>
            </dd>
        </dl>
        <dl>
            <dt>メールアドレス</dt>
            <dd>
                <?php echo str_replace("@", "[at]", h($setting['from_mail_address'])) ?>
            </dd>
        </dl>
        <dl>
            <dt>ホームページ</dt>
            <dd>
                <?php echo $this->Html->link(h($setting['company_url']), h($setting['company_url']), array('target' => '_blank')) ?>
            </dd>
        </dl>
        <dl>
            <dt>役務の対価</dt>
            <dd>
                各プロジェクトが募集期間内に成立した場合に限り、確定した支援総額の12％（一部変更あり、詳細は規約をご確認ください。）が当社への利用料として発生します。支援者であるユーザーに対価をご負担いただく役務の提供はありません。支援金はプロジェクトオーナーが提示するリターンの対価（購入代金）として、所定の方法によりお支払いください。
            </dd>
        </dl>
        <dl>
            <dt>役務の内容</dt>
            <dd>ユーザーがプロジェクトオーナーとして掲載したプロジェクトの売買取引を成立させる場又は機会の提供しています。</dd>
        </dl>
        <dl>
            <dt>役務の提供時期</dt>
            <dd>各プロジェクトの掲載開始から当該プロジェクトの掲載終了まで<br>
				※支援者へのリターンの引き渡し時期は、当該プロジェクトの該当ページに記載します。
			</dd>
        </dl>
        <dl>
            <dt>支払時期</dt>
            <dd>当該プロジェクトの該当ページに特に記載がない限り、プロジェクト成立後（支援者による資金提供誓約後、当該プロジェクトが予め設定した目標額に到達した時点）速やかに送金されます。</dd>
        </dl>
        <dl>
            <dt>支払方法</dt>
            <dd>クレジットカード、コンビニ払い、銀行振込、ビットコインでのお支払となります。<br>
            ※振込等の手数料は支援者の負担となります。<br>
			※利用料の支払いは、プロジェクト成立後確定した支援総額から差し引くことにより行われます。<br>
            </dd>
        </dl>
        <dl>
            <dt>商品の代金以外の料金について</dt>
            <dd>購入代金以外にかかる料金はありません。<br>
				但し、リターンの送料が支援者の負担とプロジェクトの該当ページで記載されている場合は、別途送料が発生します。
			</dd>
        </dl>
        <dl>
            <dt>返金・キャンセル</dt>
            <dd>本サービスに掲載が開始されたプロジェクトは、成立前であっても当社の承諾なく掲載を取り下げたり、募集期間や目標金額、リターンの内容、支援金額を変更することはできません。なお、募集期間内であっても成立したプロジェクトに関する返金、キャンセルの受付は、一切お断りさせていただきます。</dd>
        </dl>
        <dl>
            <dt>その他の注意事項</dt>
            <dd>
                以下の規約をご確認ください。<br>
				利用規約、ユーザーポリシー等
            </dd>
        </dl>

    </div>
</div>
