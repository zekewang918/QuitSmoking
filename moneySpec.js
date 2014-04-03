// Specfile of money.js
// all jasmine test are here

describe("test the function getPricePerCigarette ", function() {
	var spyEven;

	it("Test good and bad cases", function() {
	   var spyEven = spyOnEvent( ,'click'); // pb here
	   //Good cases :
	   var a = getPricePerCigarette();

	  // division by zero
	  var b = isNaN(getPricePerCigarette());
	  // negative
	  var c = null;
	  
	  expect(a).toEqual(1);
	  expect(b).toBe(true);
      expect(c).toEqual(-1);
    });
});		
	


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
	
	// Simulate user inputs :
	
      var a = moneyStatus(100, 200); 
	  // will not pass does not return anything and depend on the input
	  expect(a).toEqual(50);
    });
	
});
