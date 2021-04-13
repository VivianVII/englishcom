@extends('layouts.default')

@section('title','International')

@section('content')
  <div class="py-5 bg-image-full" style="background-image: url('../images/international.jpg');">
    <div style="height: 400px;"></div>
  </div>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <p>Students come from various countries like Japan, Korea, Singapore, Indonesia, Myanmar, Vietnam and China, however, the majority are from Japan and Korea. These students have contributed greatly to our understanding of each others' culture and norms.
        Lessons had always been in person and on an individual basis. Covid-19 has changed all that. When the covid situation eased temporarily, the students returned for their lessons, some in person while others continued through skype. Now, with the 3rd wave of covid, I believe that online learning is the way forward; it's more practical for both students and teachers.</p>
    </div>

    <div class="jumbotron jumbotron-fluid bg-transparent">
        <h1 class="display-4 sectionheading text-center">My Students - Past and Present</h1>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <h1 class="card-title text-center sectionheading font-weight-bold">Japanese</h1>
        <img class="card-img-top" src="{{asset('images/japanese.jpg')}}">
        <h3>会話クラス</h3>
        <p class="class-text">
        多くの人が職場など他人の前で流ちょうに英語を話したいと思うはずです。私が根気強く生徒に伝えているのは、間違いを恐れず、自信をもつことが新しい言語を学ぶ上で重要な要素だということです。
        私たちがお手伝いできるのは、正しい指導や適切なツールを使って生徒に自信をもってもらうことです。恥じらいを捨てるということは大切です。もちろん私は常に学生が気持ちの良い状況で会話ができるように配慮しています。
        </p>


        <h3>小中学生向けクラス</h3>
        <p class="class-text">子どもたちは世界の共通語である英語を学ぶことで、自信をもちながら成長できるでしょう。子どもたちには個性があり、それぞれの学習ペースがあります。私たちは、ひとりひとりのレベルやニーズに合わせてレッスンを行います。また、先生と生徒の関係では継続性が大切です。このクラスでは、コース受講中は同じ先生が同じ生徒を担当するように配慮しています。
        コースの内容
        <ul>
        <li>英語力を測るための課題</li>
        <li>基礎文法の指導</li>
        <li>語彙力の向上</li>
        <li>読解力と理解力の向上</li>
        <li>構文学習</li>
        <li>発音</li>
        </ul>
        </p>

        <h3>大人向けクラス</h3>
        <p class="class-text">働いている方をはじめ、英語を学びたいと思うすべての方のためのコースです。それぞれの目標を達成するために柔軟に授業を行います。
        コースの内容
　       まずは自身の英語のレベルを知ることからスタートします
        <ul>
        <li>各自のニーズに合わせた授業</li>
        <li>学習トピックの選択</li>
        <li>英文のチェックや修正</li>
        </ul>
        </p>

        <h3>上級クラス</h3>
        <p class="class-text">
        <ul>
          <li>さらに上のレベルを目指す人向けのコースです</li>
          <li>会社や大学で必要なレベルの英語を学習します</li>
          <li>仕事や学校の課題・プロジェクトなどの学習トピックの選択</li>
          <li>報告書やレポート作成のためのスキルの習得</li>
          <li>上手なスピーチをするための演説法の習得</li>
        </ul>
        </p>

        <h3>Testimonial</h3>
         <p class="class-text">私は仕事の都合でマレーシアに来ましたが、当初は英語が思うように話せず大変苦労しました。仕事では同僚と英語で話したり、書類を書いたりする機会が多かったため、すぐに英語の先生を探し始めましたが、そんな時、日本人会の掲示板でChrisのことを知り、レッスンに通うことになりました。
         彼女は日本人をはじめ外国人に英語を教えた経験が豊富で、私の下手な英語にも辛抱強く耳を傾けてくれ、熱心に教えてくれます。またレッスンの時間も柔軟に対応してくれるため、仕事をしている私にとっては大変助かっています。授業以外のところでもさまざまなことを教えてくれたり、助けてくれるあたたかい人柄です。彼女のような先生に出会えたことに感謝しています。みなさんにもぜひ、Chrisのレッスンを受けてみてください。<cite>--Hiroko</cite>
        </p>  

        <p class="card-text">I have been teaching English to Japanese expatriates in Malaysia for the past 12 years. Over that time, I have established good teacher-student relationships with many of my students; some eventually returned to Japan and have since continued their lessons with me online. 
            The adults I work with are those who need help in their English for business communications, or those who just wish to speak English confidently in their social interactions. They usually are senior  management staff from different fields, ranging from manufacturing to electronics, automotive, trading, or logistics.
            The children are from international schools where English proficiency is a must. A few, however, are from the Japanese School, as their parents want them to master English. I can classify my child pupils into 2 basic groups i.e.(i) newly-arrived elementary school students who have very little knowledge of English, and (ii) middle and high school students who need help with their school assignments and essays.
            I love teaching and it is heartening to see my students growing more confident as lessons progressed; this is especially so when they become straight-As achievers as some of them now are.
        </p>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <h1 class="card-title text-center sectionheading font-weight-bold">Korean</h1>
        <img class="card-img-top" src="{{asset('images/korean.jpg')}}">
        <p class="card-text">We have a large community of Koreans  in Malaysia. Most of my students are studying at international schools, and they come to live in Malaysia solely for their education. Sadly, many in this group have returned to Korea as schooling has been disrupted and is now online.
My adult Korean students are expatriates working in Malaysia, and their language skills range from Intermediate to Advanced levels. They prove to be fast learners and are doing well in their mastery of the language. 
        </p>
      </div>
    </div>
 </section>

@endsection
