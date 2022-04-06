const quiz = [
{
   question: '大型犬は次の内どれ？',
   answers: [
    'トイプードル',
    'ゴールデンレトリバー',
    'ビーグル',
    'チワワ'
   ],
   correct: 'ゴールデンレトリバー'
  }, {
   question: '一日に与えるドッグフードの回数は次の内どれ？',
   answers: [
    '1回',
    '2回',
    '3回',
    '4回'
   ],
   correct: '3回'
  }, {
   question: '2021年人気犬種ランキング1位を獲得した犬は次の内どれ？',
   answers: [
    'トイプードル',
    'フレンチブルドッグ',
    'ラブラドールレトリバー',
    'グレーハウンド'
   ],
   correct: 'トイプードル'
  } 
];

const quizLength = quiz.length;
let quizIndex = 0;
let score = 0;

const $button = document.getElementsByTagName('button');
const buttonLength = $button.length;

//クイズの問題文、選択肢を定義
const setUpQuiz = () => {
 document.getElementById('js-question').textContent = quiz[quizIndex].question;
  let buttonIndex = 0;
  while(buttonIndex < buttonLength){
    $button[buttonIndex].textContent = quiz[quizIndex].answers[buttonIndex];
    buttonIndex++;
  }
}
setUpQuiz();

const clickHandler = (e) => {
  if (quiz[quizIndex].correct === e.target.textContent){
    window.alert('正解！');
    score++;
  } else {
    window.alert('不正解！');
  }

  quizIndex++;

  if(quizIndex < quizLength){
    //問題数がまだあればこちらを実行
    setUpQuiz();
  } else {
    //問題数がもうなければこちらを実行
    window.alert('修了！あなたの正解数は' + score + '/' + quizLength + 'です！');
  }
};


//ボタンをクリックしたら正誤判定
let handlerIndex = 0;
while (handlerIndex < buttonLength) {
  $button[handlerIndex].addEventListener('click', (e) => {
    clickHandler(e);
  });
  handlerIndex++;
}


