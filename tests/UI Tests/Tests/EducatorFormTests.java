package Tests;

import Framework.BaseTestCase;
import Repo.EducatorFormScreen;

import org.openqa.selenium.*;

//assertEquals
//assertTrue
//assertFalse
//assertNotNull
//assertNull
//assertSame
//assertNotSame
//assertArrayEquals
//Examples: http://www.tutorialspoint.com/junit/junit_using_assertion.htm

public class EducatorFormTests extends BaseTestCase {
	
	//function name format:
	//test<action><Expected Result>
    	
	        
   
    
    public void testLoginCaregiverUserShouldWork() throws Exception {    	
    	for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(EducatorFormScreen.getURL());

	    	EducatorFormScreen.getFirstNameTextbox(driver).sendKeys("ravi");
	    	EducatorFormScreen.getLastNameTextbox(driver).sendKeys("kumar");
	    	EducatorFormScreen.getSchoolNameTextbox(driver).sendKeys("omaha public school");
	    	EducatorFormScreen.getSchoolPhoneTextbox(driver).sendKeys("4023213815");
	    	EducatorFormScreen.getSchoolAddressTextbox(driver).sendKeys("7114, Jones Circle, Annex Apt");
	    	EducatorFormScreen.getCityTextbox(driver).sendKeys("omaha");
	    	EducatorFormScreen.SetSchoolStateDropDown(driver, "Alaska");
	    	EducatorFormScreen.getStateTextbox(driver).sendKeys("Nebraska");
	    	EducatorFormScreen.getZipTextbox(driver).sendKeys("68106");
	    	EducatorFormScreen.getEmailTextbox(driver).sendKeys("ragarwal@unomaha.edu");
	    	EducatorFormScreen.getGradeTextbox(driver).sendKeys("first");
	    	EducatorFormScreen.getProgramThemeTextbox(driver).sendKeys("Nebraska Huskers");
	    	EducatorFormScreen.getNoofclassesTextbox(driver).sendKeys("2");
	    	EducatorFormScreen.getNoofstudentsTextbox(driver).sendKeys("20");
	    	EducatorFormScreen.getPlanningTimeTextbox(driver).sendKeys("3:30");
	    	EducatorFormScreen.getCellPhoneTextbox(driver).sendKeys("4023213815");
	    	EducatorFormScreen.getCommentsTextbox(driver).sendKeys("Thank you");
	    	
	    	
	    	EducatorFormScreen.getSaveButton(driver).click();
	    	
	    	
	    	
	    	
	    		    	
    	}
    }
}
   