function calcWordFrequencies(){
  var splitWords = function (input) {
    return input.split(' ');
  };
  var input = prompt('Enter words separated by a space');
  var wordArray = splitWords(input);


  var wordCounts={};
  wordArray.forEach(function (item, index) {
    if(item in wordCounts)
      wordCounts[item]++;
    else
      wordCounts[item] = 1;

  })

  wordArray.forEach(function (item, index){
  console.log(wordArray[index] + " " + wordCounts[item]);
  })
}
