// Specfile of money.js
// all jasmine test are here

describe("test the function getPricePerCigarette ", function() {

	it("Test normal cases", function() {
		// Page initialisation
		addTagToHtmlBody('<input type="text" id="price" >Enter the price of your packets</input>');
		addTagToHtmlBody('<input type="text" id="number">Enter the number of cigarettes by packets</input>');
		
	   //We simulate a user input
	   document.getElementById("price").value = '10';
	   document.getElementById("number").value = '20';

	   //Good case :
	   var a = getPricePerCigarette();

	  expect(document.getElementById("price").value).toMatch('10');
	  expect(document.getElementById("number").value).toMatch('20');
	  expect(a).toEqual(0.5);
	 }); 
	 
	 it("Test other cases", function() {
	   // division by zero
	   document.getElementById("number").value = '0';	
	   var b = isFinite(getPricePerCigarette());
	   console.log(getPricePerCigarette());
	  // negative
	  document.getElementById("number").value = '-10';	
	  var c = getPricePerCigarette();
	  
	  expect(b).toBe(false);
      expect(c).toEqual(-1);
	   
	 }); 

});
// Code refactoring
function addTagToHtmlBody(new_tag) {
			$(new_tag).appendTo('body');
		}
		
describe("test the function totalMoneySpent ", function() {

    it("Test normal case", function() {
      var a = totalMoneySpent(100, 0.652);
	  var b = totalMoneySpent(0, 0.50);
	  
      expect(a).toEqual(65);
	  expect(b).toEqual(0);
    });
	
});	

describe("test the function totalMoneySaved ", function() {

    it("Test normal case", function() {
      var a = totalMoneySaved(100, 150, 0.5);
	  // Test if the money saved is zero when the previous consumption is greater than the actual
	  var b = totalMoneySaved(200, 100, 1.2);
	  
      expect(a).toEqual(25);
	  expect(b).toEqual(0);
    });
});	


describe("test the function moneyStatus ", function() {

    it("Test normal case", function() {
	
	// Page initialisation
	addTagToHtmlBody('<p id ="money_spent">');
	addTagToHtmlBody('<p id ="money_saved"></p>');

	// Simulate user inputs :
	  document.getElementById("price").value = '10';
	  document.getElementById("number").value = '20';
	  
      moneyStatus(100, 200); 
	  
	  a = document.getElementById("money_spent").innerHTML;
	  b = 'You have spent $50 since you joined this program.';
	  
	  c= document.getElementById("money_saved").innerHTML;
	  d= 'You have saved $50 since you joined this program.';

	  expect(a).toEqual(b);
	  expect(c).toEqual(d);
    });
	
});
