package Tests;

import Framework.BaseTestCase;
import Repo.JoinTeamMemberScreen;

import org.openqa.selenium.*;


public class JoinTeamMemberTest extends BaseTestCase {
	
	public void test_jointeam(){
		for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(JoinTeamMemberScreen.getURL());
	    	JoinTeamMemberScreen.getJoinTeamButton1(driver).click();
	    	JoinTeamMemberScreen.getEmailTextbox(driver).sendKeys("tony@gmail.com");	    	
	    	JoinTeamMemberScreen.getPasswordTextbox(driver).sendKeys("secret");
	    	JoinTeamMemberScreen.getLoginButton(driver).click();
	    	
	    	JoinTeamMemberScreen.getTitleTextbox(driver).sendKeys("Welcome to Tony's page");	    	
	    	JoinTeamMemberScreen.getContentTextbox(driver).sendKeys("Automation Testing ");
	    	JoinTeamMemberScreen.getGoalTextbox(driver).sendKeys("500");
	    	JoinTeamMemberScreen.getJoinTeamButton(driver).click();
	    	
		}
	}
		

}