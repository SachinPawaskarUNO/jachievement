package Tests;

import Framework.BaseTestCase;
import Repo.LoginScreen;

import org.openqa.selenium.*;


public class LoginTests extends BaseTestCase {
	
	public void test_login_correctpasswd(){
		for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(LoginScreen.getURL());
	    	LoginScreen.getEmailTextbox(driver).sendKeys("basicadmin@unomaha.edu");	    	
	    	LoginScreen.getPasswordTextbox(driver).sendKeys("secret");
	    	LoginScreen.getLoginButton(driver).click();
	    	assertEquals("Junior Achievement of the Midlands", driver.getTitle());
		}
	}
		
	public void test_login_incorrectpasswd(){
			for (WebDriver driver : super.getDrivers()) {    	
		    	driver.get(LoginScreen.getURL());
		    	LoginScreen.getEmailTextbox(driver).sendKeys("basicadmin@unomaha.edu");	    	
		    	LoginScreen.getPasswordTextbox(driver).sendKeys("www");
		    	LoginScreen.getLoginButton(driver).click();

		    	String errormessage =LoginScreen.getErrorMessage(driver).getText(); 
		    	
		    	boolean error;
		    	if(errormessage.length()>0)
		    		error=true;
		    	else
		    		error=false;
		    	assertFalse(error);
		    
		    
		    	
			}
		 
	}
}