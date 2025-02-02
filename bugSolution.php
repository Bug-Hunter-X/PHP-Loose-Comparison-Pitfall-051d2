function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//Strict comparison ensures that both the value and type match. 
//Using === will return false as expected.
var result = foo(0, '0'); //false
console.log(result); //false

//To handle loose comparison explicitly, you might use type checking:
function fooLoose(a, b) {
  if (a == b && typeof a === typeof b){
    return true;
  }
  return false;
}

// This will still return false because the types are different
var resultLoose = fooLoose(0, '0'); //false
console.log(resultLoose); // false

//If you intend to handle the case where you want 0 and '0' to be equal, you must explicitly handle type conversion:
function fooLooseConversion(a,b){
  if((parseInt(a) == parseInt(b))){
    return true;
  }
  return false;
}
// This will return true because the values are equal after type conversion
var resultLooseConversion = fooLooseConversion(0, '0'); //true
console.log(resultLooseConversion); //true