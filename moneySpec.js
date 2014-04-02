// Specfile of money.js
// all jasmine test are here

describe("test the funtion totalMoneySpent ", function() {

    it("Test normal case", function() {
      var a = totalMoneySpent(100, 10, 20);
	  var b = totalMoneySpent(0, 10, 20);
	  
      expect(a).toEqual(50);
	  expect(b).toEqual(0);
    });
	
	
	it("Test normal bad cases", function() {
	  // division by zero
	  var a = isNaN(totalMoneySpent(100, 10, 0));
	  
	  // negative
	  var b = totalMoneySpent(100, 10, -20);
	  var c = totalMoneySpent(100, -10, 20);
	  
	  expect(a).toBe(true);
      expect(b).toEqual(-50);
	  expect(c).toEqual(-50);
    });
	
	
});

describe("test the funtion getValues ", function() {

    it("Test normal case", function() {
	
	// Simulate user inputs :
	
      var a = getValues(100); // will not pass
	  expect(a).toEqual(50);
    });
	
});
