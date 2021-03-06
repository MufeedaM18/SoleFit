var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};

var food = [
    'Boiled Egg','Cheese','Banana','Burger','Oats','French Fries','Pizza','Ice cream','Milk','Chocolate','Pasta','Chicken','Beef','Apple','Rice','Dried dates','Cooked Soya Bean',
];

$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'food',
  source: substringMatcher(food)
});