package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class JoinTeamScreen extends BaseScreen{
	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/event/team/view/AFJ7Q1DsRzPHGUZ";
	}
	public static WebElement getJoinOurTeamButton(WebDriver driver) {
		return driver.findElement(By.id("member_join"));
	}
	
	public static WebElement getEmailTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_loginemail"));
	}
	
	public static WebElement getPasswordTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_loginpw"));
	}
	

	public static WebElement getLoginButton(WebDriver driver) {
		return driver.findElement(By.id("ja_loginsubmit"));
	}
	
	
	public static WebElement getTitleTextbox(WebDriver driver) {
		return driver.findElement(By.id("title"));
	}
	
	public static WebElement getContentTextbox(WebDriver driver) {
		return driver.findElement(By.id("content"));
	}
	
	public static WebElement getGoalTextbox(WebDriver driver) {
		return driver.findElement(By.id("formatGoal"));
	}
	
	public static WebElement getJoinTeamButton(WebDriver driver) {
		return driver.findElement(By.id("joinTeam"));
	}
	
}//end of class loginScreen