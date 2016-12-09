package Tests;

import Framework.BaseTestCase;
import Repo.JoinTeamScreen;

import org.openqa.selenium.*;


public class JoinTeamTest extends BaseTestCase {
	
	public void test_jointeam(){
		for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(JoinTeamScreen.getURL());
	    	JoinTeamScreen.getJoinOurTeamButton(driver).click();
	    	JoinTeamScreen.getEmailTextbox(driver).sendKeys("andrew@gmail.com");	    	
	    	JoinTeamScreen.getPasswordTextbox(driver).sendKeys("secret");
	    	JoinTeamScreen.getLoginButton(driver).click();

	    	JoinTeamScreen.getTitleTextbox(driver).sendKeys("Welcome to Andrew's page");	    	
	    	JoinTeamScreen.getContentTextbox(driver).sendKeys("Automation Testing.");
	    	JoinTeamScreen.getGoalTextbox(driver).sendKeys("500");
	    	JoinTeamScreen.getJoinTeamButton(driver).click();
	    	
		}
	}
		
}