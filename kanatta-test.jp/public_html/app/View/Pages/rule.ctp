<?php $tosya = ($setting['company_type'] == 1) ? '当社' : '当方' ?>
<div class="about_box_wrap">
    <div class="about_box">
        <h1>利用規約</h1>
        <h2>総則</h2>
        <p>この利用規約（以下「本規約」といいます。）は、本規約は、<a href="<?php echo h($setting['company_url']) ?>" target="_blank">
                <?php echo h($setting['company_name']) ?>
            </a>
            （以下「<?php echo $tosya ?>」といいます）が運営する『<?php echo h($setting['site_name']) ?>
            』（以下「本サービス」といいます）に関し、本サービスを利用する全ての方（以下「利用者」といいます）が遵守すべき事項および利用者と<?php echo $tosya ?>との関係を定めるものです。</p>
        <p>利用者は本規約に同意の上、本サービスを利用するものとします。</p>
        <p><?php echo $tosya ?>は、利用者が本サービスを利用した場合、当該利用者が本規約に同意したものとみなします。また、<?php echo $tosya ?>
            は、利用者に対する事前又は事後の通知なしに本規約を改定できるものとし、本規約の改定後は、改定後の本規約を適用するものとします。なお、利用者が本規約の改定後に本サービスを利用した場合、改定後の本規約に同意したものとみなします。</p>

        <h3>第1条（定義）</h3>
        <ul>
            <li><p>「本サービス」とは、当社がクラウドファンディングサービス「<?php echo h($setting['site_name']) ?>」を通じてユーザーに提供する、ユーザーが起案者として掲載したプロジェクトについて売買取引を成立させる場又は機会の提供をいいます。</p></li>
            <li><p>「ユーザー」とは、本規約に同意して当社が定める方法により本サービス利用のために入会を申し込んだ者のうち、当社が承認した者をいいます。</p></li>
            <li><p>「プロジェクト」とは、起案者が本サービスを通じて提案した支援者を募集（以下「支援募集」といいます。）する企画（製品の販売のほかイベントの開催やサービスの提供をはじめとする様々な物およびサービスの提供と、その対価としての支援金を設定したもの）をいいます。</p></li>
            <li><p>「起案者」とは、本サービス内でプロジェクトを提案し、支援者を募集し又は過去にしたユーザーをいいます。なお、プロジェクト成立後はユーザー間契約における売主となります。</p></li>
            <li><p>「支援者」とは、プロジェクトに共感し、支援金の支払いとリターンの購入を希望するユーザーのうち、プロジェクトの支援金の支払いを表明したユーザーをいいます。なお、プロジェクト成立後はユーザー間契約における買主となります。</p></li>
            <li><p>「支援募集期間」とは、当該プロジェクトが本サービスにおいて公開された日から、本サービス内でプロジェクトの支援募集をすることができる期間としてプロジェクト毎に　定められた最終日までの期間をいいます。</p></li>
            <li><p>「リターン」とは、プロジェクトが成立した場合に、起案者が支援者に対して各支援者の支援金額に応じて提供する商品（商品や役務提供のためのチケットを含みます。）をいいます。プロジェクト成立後はユーザー間契約における取引対象の商品となります。</p></li>
            <li><p>「ユーザー間契約」とは、プロジェクトの成立及び支援金の決済を持って効力を生じる、支援者が起案者から支援金相当額でリターンを購入する売買契約をいいます。</p></li>
        </ul>

        <h3>第2条（本サービスと当社の役割）</h3>
        <p>1．Kanattaは、ユーザーである起案者が掲載したプロジェクトに対し、他のユーザーが支援者となり、当該プロジェクトへ金銭的な支援をすることでユーザー間にリターンの売買を行う機会を提供するクラウドファンディングサービスです。</p>
        <p>2．ユーザー間契約は、プロジェクトが成立すると確定的に効力が発生します。ユーザー間契約に基づく権利の行使又は義務の履行は、すべて当事者であるユーザーが自己の責任と費用の負担において行うものとします。当社は取り消し、中途解約、解除、変更、返金、保証など当事者（または関連する第三者を含む）における契約の履行には一切関与いたしません。ユーザー間でトラブル等が発生した場合についても、当社が仲裁し、解決にあたることはございません。取引に際しては十分に注意し、予めご了承の上ご利用ください。</p>
        <p>3．起案者契約が締結され、支援募集の開始が当社によって承認された場合、当該プロジェクトの支援募集が開始されます。支援募集開始後は、起案者による起案者契約及びプロジェクトの変更及び取り消しはできません。</p>
        <p>4．起案者契約はプロジェクトが不成立となった時点で終了します。</p>

        <h3>第3条（プロジェクトの開始）</h3>
        <p>1．起案者は、当社が定める方法に従い、プロジェクトに関する必要な情報を当社に対し送信することにより、支援募集の開始を申請することができます。</p>
        <p>2．起案者は、当社の定める基準に従い支援募集の開始が承認されたと同時に、当社との間で、プロジェクトの概要、プロジェクトの期間、支援金額毎のリターン、目標金額、支援金支払いの留保その他の支援募集に必要な事項に関する契約（以下「起案者契約」）を締結するものとします。</p>
        <p>3．起案者契約が締結され、支援募集の開始が当社によって承認された場合、当該プロジェクトの支援募集が開始されます。支援募集開始後は、起案者による起案者契約及びプロジェクトの変更及び取り消しはできません。</p>
        <p>4．起案者契約はプロジェクトが不成立となった時点で終了します。</p>

        <h3>第4条（プロジェクトとユーザー間契約の成立）</h3>
        <p>1．支援募集期間内に、支援金の総額（以下「支援総額」）が目標金額に達した時点で、プロジェクトが成立し、起案者に利用料が発生します。</p>
        <p>2．プロジェクトの成立後、支援者は、ユーザー間契約の解約・取消等をすることはできません。</p>
        <p>3．プロジェクトの成立後、各支援者が予め設定した支援金の決済方法に従って支援金が決済された時点で、各ユーザー間契約が成立します。</p>
        <p>4．ユーザーは、ユーザー間契約の締結に当たり，当社の事前の承諾なしに、ユーザー間契約の内容として本規約に定める内容以外の条件又は期限等（担保を設定する旨の合意を含みます。）を定めることはできません。また、支援者は、起案者に対してリターンの提供についての同時履行の抗弁権を主張することはできません。</p>
        <p>5．当社は、ユーザー間契約の履行を含め支援者と起案者間の債権債務関係について、一切責任を負わないものとし、何らかの問題が発生した場合であっても、支援者と起案者との間で解決されるものとし、当社は一切責任を負いません。ただし、システム上の不具合などの決済に関する問題に起因し、当社が必要と判断した場合はこの限りではありません。</p>

        <h3>第5条（プロジェクト不成立）</h3>
        <p>1．支援総額が目標金額に到達せずに支援募集期間が終了したときは、プロジェクトは不成立となります。</p>
        <p>2．プロジェクトが不成立の場合、支援者が予め設定した支援金の決済は行われず、ユーザー間契約も成立しません。</p>

        <h3>第6条（利用登録）</h3>
        <p>1．登録希望者が当社の定める方法によって利用登録を申請し、当社がこれを承認することによって、利用登録が完了し、ユーザーとなることができます。</p>
        <p>2．当社は、利用登録の申請者に以下の事由があると判断した場合、利用登録の申請を承認しないことがあります。なお、承認しない理由については一切の開示義務を負わないものとします。</p>
        <p>（1）利用登録の申請に際して虚偽、誤記又は記載漏れがあった場合</p>
        <p>（2）本規約に違反したことがある者からの申請である場合</p>
        <p>（3）未成年者、成年被後見人、被保佐人または被補助人のいずれかであり、法定代理人，後見人、保佐人または補助人の同意等を得ていなかった場合</p>
        <p>（4）反社会的勢力等（暴力団、暴力団員、右翼団体、反社会的勢力、その他これに準ずる者を意味します。）である，または資金提供その他を通じて反社会的勢力等の維持、運営もしくは経営に協力もしくは関与する等反社会的勢力との何らかの交流もしくは関与を行っていると当社が判断した場合</p>
        <p>（5）その他、当社が利用登録を相当でないと判断した場合</p>

        <h3>第7条（ユーザーIDおよびパスワードの管理）</h3>
        <p>1．ユーザーは、前条の承認時に発行された本サービスのユーザーIDおよびパスワードを自己の責任において、管理するものとします。</p>
        <p>2．ユーザーIDおよびパスワード等の管理不十分、使用上の過誤、第三者の使用等による損害の責任はユーザーが負うものとし、当社は一切の責任を負わないものとします。</p>
        <p>3．ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与することはできません。</p>
        <p>4．ユーザーIDおよびパスワードを第三者に譲渡または貸与した場合、当社はそのユーザーIDやパスワード等を不正アカウントとして停止することができるものとします。</p>
        <p>5．当社は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。</p>

        <h3>第8条（利用料および支援金の支払方法）</h3>
        <p>1．プロジェクトが成立した場合、起案者は当社に対してのプロジェクト支援の販売成約手数料として、支援金総額の12%（コンサルティングを導入した場合は、コンサル　　　ティング料3%、コンサルティングと画像コンテンツ料5%が別途発生します。）が発生（以下「利用料」といいます。）します。</p>
        <p>2．利用料は、当社から起案者へ支払われる支援金総額から差し引かれます。なお、支援金の支払いに要する費用は起案者の負担となります。</p>

        <h3>第9条（禁止事項）</h3>
        <p>1．ユーザーは、本サービスの利用にあたり、以下の行為を行ってはなりません。</p>
        <p>2．ユーザーが以下のいずれかに該当する行為を行ったことにより、当社が何らかの損害を被った場合、当社はユーザーに対して損害賠償の請求ができるものとします。</p>
        <p>（1）法令または公序良俗に違反する行為</p>
        <p>（2）詐欺等の犯罪行為に関連する行為</p>
        <p>（3）当社のサーバーまたはネットワークの機能を破壊したり、妨害したりする行為</p>
        <p>（4）当社のサービスの運営を妨害するおそれのある行為</p>
        <p>（5）他のユーザーに関する個人情報等を収集または蓄積する行為</p>
        <p>（6）他のユーザーに成りすます行為</p>
        <p>（7）当社のサービスに関連して、反社会的勢力に対して直接または間接に利益を供与する行為</p>
        <p>（8）当社、本サービスの他の利用者または第三者の知的財産権、肖像権、プライバシー，名誉その他の権利または利益を侵害する行為</p>
        <p>（9）過度に暴力的な表現、露骨な性的表現、人種、国籍、信条、性別、社会的身分、門地等による差別につながる表現、自殺、自傷行為、薬物乱用を誘引または助長する表現、その他反社会的な内容を含み他人に不快感を与える表現を、投稿または送信する行為</p>
        <p>（10）営業、宣伝、広告、勧誘、その他営利を目的とする行為（当社の認めたものを除きます。）、ポルノ、売春、風俗営業、これらに関連する内容の情報を開示する行為、その他本サービスが予定している利用目的と異なる目的で本サービスを利用する行為</p>
        <p>（11）宗教活動または宗教団体への勧誘行為</p>
        <p>（12）その他、当社が不適切と判断する行為</p>

        <h3>第10条（本サービスの提供の停止等）</h3>
        <p>当社は、以下のいずれかの事由があると判断した場合、ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。</p>
        <p>（1）本サービスにかかるコンピュータシステムの保守点検または更新を行う場合</p>
        <p>（2）地震、落雷、火災、停電または天災などの不可抗力により、本サービスの提供が困難となった場合</p>
        <p>（3）コンピュータまたは通信回線等が事故により停止した場合</p>
        <p>（4）本サービス提供のためのコンピューターシステムの不良及び第三者からの不正アクセス、コンピューターウイルスの感染等により本サービスを提供できない場合</p>
        <p>（5）その他、当社が本サービスの提供が困難と判断した場合<br>当社は、本サービスの提供の停止または中断により、ユーザーまたは第三者が被ったいかなる不利益または損害について、理由を問わず一切の責任を負わないものとします。</p>

        <h3>第11条（知的財産権等）</h3>
        <p>1．本サービスを構成する素材(文字、写真、映像、音声等を指し、以下「コンテンツ素材」といいます)に関する一切の権利(所有権、知的財産権、肖像権、パブリシティー権等)は当社または当該権利を有する第三者（起案者等含むがこれに限らない）に帰属しています。ただし、起案者により投稿されたプロジェクトの情報（文章、イラスト、写真等）については、本サービスを宣伝・広告・特集による紹介を目的として、当社が自由に利用することにつき予め了承するものとします。</p>
        <p>2．ユーザーは、コンテンツ素材について、一切の権利を取得することはないものとし、権利者の許可なく、所有権、著作権を含む一切の知的財産権、肖像権、パブリシティー権等、コンテンツ素材に関する全ての権利を侵害する一切の行為をしてはならないものとします。</p>
        <p>3．本サービス自体、ならびに、本サービスを利用するに当たって知り得た一切の秘密情報に関する権利(コンテンツ素材を除き、本サービスのプログラム、ノウハウを含む、所有権、知的財産権、肖像権、パブリシティー権等)は当社に帰属するものとし、当社の書面による承諾なく、自身及び第三者をして利用してはならないものとします。</p>
        <p>4．起案者はプロジェクトの情報について、第三者の権利を侵害してはなりません。プロジェクトによって権利を侵害されたと主張する第三者に対し当社が支払った金銭については、当該第三者の主張が著しく不合理である場合を除き、全額起案者に請求するものとします。</p>
        <p>5．本条の規定に違反して問題が発生した場合、ユーザーは、自己の費用と責任においてかかる問題を解決するとともに、当社に何等の迷惑または損害を与えないものとします。</p>

        <h3>第12条（利用制限および登録抹消）</h3>
        <p>1．当社は、以下の場合には、事前の通知なく、利用の制限、またはユーザーとしての登録を抹消することができるものとします。</p>
        <p>（1）本規約のいずれかの条項に違反した場合</p>
        <p>（2）登録事項に虚偽の事実があることが判明した場合</p>
        <p>（3）破産、民事再生、会社更生または特別清算の手続開始決定等の申立がなされたとき</p>
        <p>（4）その他、当社が本サービスの利用を適当でないと判断した場合</p>
        <p>2．前項各号のいずれかに該当した場合、ユーザーは、当然に当社に対する一切の債務について期限の利益を失い、その時点において負担する一切の債務を直ちに一括して弁済しなければなりません。</p>
        <p>3．当社は、本条に基づき当社が行った行為によりユーザーに生じた損害について、一切の責任を負いません。</p>

        <h3>第13条（保証の否認および免責事項）</h3>
        <p>1．当社は、本サービスに事実上または法律上の瑕疵（安全性、信頼性、正確性、完全性、有効性、特定の目的への適合性，セキュリティなどに関する欠陥、エラーやバグ、権利侵害などを含みます。）がないことを明示的にも黙示的にも保証しておりません。</p>
        <p>2．当社は、ユーザーが本サービスを利用する際に、コンピュータウイルスなど有害なプログラム等による損害を受けないことを保証しないものとします。</p>
        <p>3．当社は、本サービスに関し、遅滞、変更、停止、中止、廃止、及び本サービスを通じて提供される情報等の消失、その他本サービスに関連して発生した損害について、一切の責任を負わないものとします。</p>
        <p>4．当社は、当社が提供するサービスに於いて、ユーザー及び第三者間で生じたトラブル　　（違法または公序良俗に反する行為の提案、名誉毀損、侮辱、プライバシー侵害、脅　　迫、誹謗中傷、いやがらせ等）に関して、一切の責任を負わないものとします。</p>
        <p>5．当社は、本サービスを通じて行われたユーザー間契約について、一切の責任を負わないものとし、全ての取引は当該ユーザー間の責任においてなされるものとします。</p>
        <p>6．当社は、本サービスに起因してユーザーに生じたあらゆる損害について一切の責任を負いません。ただし、本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合、この免責規定は適用されません。</p>
        <p>7．前項ただし書に定める場合であっても、当社は、当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当社またはユーザーが損害発生につき予見し、または予見し得た場合を含みます。）について一切の責任を負いません。また、当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害の賠償は、ユーザーから当該損害が発生した月に受領した利用料の額を上限とします。</p>
        <p>8．当社は、本サービスに関して、ユーザーと他のユーザーまたは第三者との間において生じた取引、連絡または紛争等について一切責任を負いません。</p>
        <p>9．当社は、起案者契約に基づいて、支援募集が成立したプロジェクトの実行、およびリターンの提供が適切に行われるように起案者をサポートするとともに、それらの進捗や実施状況について報告を求めます。ただし、当該サポートおよび報告の要求は、当社が支援者に対してユーザー間契約の履行その他なんらかの履行義務または保証を生じるものではありません。</p>
        <p>10．ユーザー間契約は、起案者と支援者との間において成立するものであり、当社は、ユーザー間契約に基づく起案者又は支援者の義務が履行されることを、一切保証いたしません。また、当社は、本サービス又は本サービスにおいて支援募集が実施されたプロジェクトについて、以下の事項を含む一切の事項について何らの表明及び保証も行いません。</p>
        <p>（1）起案者により提供されるリターンが、支援者により期待される性質、品質（安全性を含みます。）、財産的価値その他の性能を備えていること。</p>
        <p>（2）プロジェクトに関して本サイト上に記載されている情報が、最新のものであること、正確かつ真実に適合するものであること。</p>
        <p>（3）プロジェクトの実施及びリターンの提供が、起案者（及び起案者と共同してプロジェクトを実施する個人又は法人）又は支援者について適用のある法令又は規則に抵触しないこと又は公序良俗に反しないこと。</p>
        <p>（4）プロジェクトが本サイトに記載された内容及び手順において実施されること。</p>
        <p>（5）起案者又は支援者が想定するとおりに公租公課又は会計の取扱いがなされること。</p>
        <p>11．ユーザーは、本サービスの利用に関連して課税が生じることがあることを理解して本サービスを利用するものとします。当社は、ユーザーの税務又は会計に関する事項について何らの判断を行わず、また一切の責任を負わず、ユーザーが自らの費用負担と責任において確認及び対応するものとします。</p>


        <h3>第14条（サービス内容の変更等）</h3>
        <p>当社は、ユーザーに通知することなく、本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし、これによってユーザーに生じた損害について一切の責任を負いません。</p>

        <h3>第15条（利用規約の変更）</h3>
        <p>1．当社は、必要と判断した場合には、ユーザーに通知することなくいつでも本規約を変更することができるものとします。</p>
        <p>2．当社は、本規約を変更した場合には、当社所定の方法によりユーザーに当該変更内容を通知または当社ウェブサイトにて公表するものとします。当該変更内容の通知もしくは公表または公表後の本サービスの利用のいずれかをもって、ユーザーは当該変更内容に同意したとみなします。</p>

        <h3>第16条（権利義務の譲渡の禁止）</h3>
        <p>1．ユーザーは、当社の書面による事前の承諾なく、利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡、移転、または担保に供することはできません。</p>
        <p>2．当社は、本サービスにかかる事業を第三者に譲渡した場合には、当該事業譲渡に伴い利用契約上の地位、本規約に基づく権利及び義務並びにユーザー登録情報その他の顧客情報を当該事業譲渡の譲渡人に譲渡することができるものとし、登録ユーザーは、かかる譲渡につき予め同意したものとします。なお、本項に定める事業譲渡には、会社分割その他包括的な事業の移転を伴う一切の場合を含むものとします。</p>

        <h3>第17条 個人情報</h3>
        <p>1．当社は、ユーザーから提供された個人情報を本サービスの提供に必要な範囲および当社のプライバシーポリシーで定められた目的の範囲で使用することができるものとし、ユーザーは、このプライバシーポリシーに従って当社がユーザーから提供された個人情報を取扱うことについて同意します。</p>
        <p>2．ユーザーは、当社に個人情報を提供する場合その他本サービスを利用するに当たり、個人情報の保護に関する法律を遵守しなければなりません。</p>

        <h3>第18条（準拠法・裁判管轄）</h3>
        <p>本規約の解釈にあたっては、日本法を準拠法とします。<br>
		  本サービスに関して紛争が生じた場合には、当社の所在地を管轄する裁判所を専属的合意管轄とします。<br>
		  当社の所在地は以下です。</p>

		<p>以上</p>
		<p>平成29年10月16日 制定</p>
  </div>
</div>