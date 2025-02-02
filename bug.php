function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This will cause unexpected behavior because === checks for both value and type
//0 and '0' are different types, resulting in false even if their values are the same
var result = foo(0, '0'); //false
console.log(result); //false