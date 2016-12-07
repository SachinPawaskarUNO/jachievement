package Tests;

import org.openqa.selenium.WebDriver;

import Framework.BaseTestCase;
import Repo.RegisterScreen;


//assertEquals
//assertTrue
//assertFalse
//assertNotNull
//assertNull
//assertSame
//assertNotSame
//assertArrayEquals
//Examples: http://www.tutorialspoint.com/junit/junit_using_assertion.htm

public class RegisterTests extends BaseTestCase {
	
		public void testscreen() throws Exception{
		for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(RegisterScreen.getURL());
	    	RegisterScreen.getFirstNameTextbox(driver).sendKeys("tester");
	    	RegisterScreen.getLastNameTextbox(driver).sendKeys("tester");
	    	RegisterScreen.getEmailTextbox(driver).sendKeys("tester@unomaha.edu");
	    	RegisterScreen.getConfirmEmailTextbox(driver).sendKeys("tester@unomaha.edu");
	    	RegisterScreen.getDisplayTextbox(driver).click();
	    	RegisterScreen.getPasswordTextbox(driver).sendKeys("secret");
	    	RegisterScreen.getConfirmPasswordTextbox(driver).sendKeys("secret");
	    	RegisterScreen.getRegister(driver).click();
		}
	}
}
