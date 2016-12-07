package Tests;

import Framework.BaseTestCase;
import Repo.VolunteerFormScreen;

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

public class VolunteerFormTests extends BaseTestCase {
	
	//function name format:
	//test<action><Expected Result>
    	
	        
   
    
    public void testLoginCaregiverUserShouldWork() throws Exception {    	
    	for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(VolunteerFormScreen.getURL());
	    	
	    	VolunteerFormScreen.getCheckBox(driver).click();
	    	VolunteerFormScreen.getSchoolNameTextbox(driver).sendKeys("omaha public schhol");
	    	VolunteerFormScreen.getFirstNameTextbox(driver).sendKeys("kumar");
	    	VolunteerFormScreen.getLastNameTextbox(driver).sendKeys("ravi");
	    	VolunteerFormScreen.getCompanyNameTextbox(driver).sendKeys("PMIC");
	    	VolunteerFormScreen.getCompanyAddressTextbox(driver).sendKeys("7114, Jones Circle, Annex Apt");
	    	VolunteerFormScreen.getCompanyCityTextbox(driver).sendKeys("omaha");
	    	VolunteerFormScreen.SetCompanyStateDropDown(driver, "Alaska");
	    	VolunteerFormScreen.getCompanyZipTextbox(driver).sendKeys("68106");
	    	VolunteerFormScreen.getCompanyPhoneTextbox(driver).sendKeys("4023213814");
	    	VolunteerFormScreen.getHomePhoneTextbox(driver).sendKeys("4023213815");
	    	VolunteerFormScreen.getHomeAdressTextbox(driver).sendKeys("7116, Jones Circle, Annex Apt");
	    	VolunteerFormScreen.getCityTextbox(driver).sendKeys("Omaha");
	    	VolunteerFormScreen.SetHomeStateDropDown(driver, "Alaska");
	    	VolunteerFormScreen.getHomeZipTextbox(driver).sendKeys("68104");
	    	VolunteerFormScreen.getEmailTextbox(driver).sendKeys("ragarwa@unomaha.edu");
	    	VolunteerFormScreen.SetModeOfContactDropDown(driver,"Email");
	    	
	    	
	    	
	    	VolunteerFormScreen.getSaveButton(driver).click();
	    	
	    	
	    	
	    	
	    		    	
    	}
    }
}
   