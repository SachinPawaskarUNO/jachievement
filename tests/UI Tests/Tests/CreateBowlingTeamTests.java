package Tests;

import Framework.BaseTestCase;
import Repo.CreateBowlingTeamScreen;
import Repo.LoginScreen;

import org.openqa.selenium.*;


public class CreateBowlingTeamTests extends BaseTestCase {
		
	public void test_create_bowling_team(){
		for (WebDriver driver : super.getDrivers()) {    	
	    	driver.get(LoginScreen.getURL());
	    	LoginScreen.getEmailTextbox(driver).sendKeys("basicadmin@unomaha.edu");	    	
	    	LoginScreen.getPasswordTextbox(driver).sendKeys("secret");
	    	LoginScreen.getLoginButton(driver).click();
	    	driver.get(CreateBowlingTeamScreen.getURL());
	    	CreateBowlingTeamScreen.SetOrganizationDropDown(driver, "Union Pacific");
	    	CreateBowlingTeamScreen.getTeamName(driver).sendKeys("UP Achiever");	
	    	CreateBowlingTeamScreen.getPageTitle(driver).sendKeys("Welcome to West Golf Fundraiser Page");
	        CreateBowlingTeamScreen.getContent(driver).sendKeys("Whether you're a golf club, charity or any other type of fundraising cause, a golf day is definitely a fundraiser worth looking into!");
	        CreateBowlingTeamScreen.getFunraisingGoal(driver).clear();
	        CreateBowlingTeamScreen.getFunraisingGoal(driver).sendKeys("1000.00");
	        CreateBowlingTeamScreen.getCheckAutoJoinTeam(driver).click();
	        CreateBowlingTeamScreen.getFillMypageTitle(driver).sendKeys("Welcome to Ricki's Fundraising Page");
	        CreateBowlingTeamScreen.getFillMypageContent(driver).sendKeys("Please Join my team and make some contribution");
	        CreateBowlingTeamScreen.getPersonalGoal(driver).clear();
	        CreateBowlingTeamScreen.getPersonalGoal(driver).sendKeys("500.00");
	        CreateBowlingTeamScreen.getCreateButton(driver).click();
	    	
		}
	}

}

