package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;

public class CreateBowlingTeamScreen {
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/campaign/team/create/2";
	}
	
	
	public static WebElement getTeamName(WebDriver driver) {
		return driver.findElement(By.id("name"));
	}
	


	public static WebElement getPageTitle(WebDriver driver) {
		return driver.findElement(By.id("title"));
}
	
	public static WebElement getContent(WebDriver driver) {
		return driver.findElement(By.id("content"));
}
	public static WebElement getFunraisingGoal(WebDriver driver) {
		return driver.findElement(By.id("formatGoal"));
}
	public static WebElement getCreateButton(WebDriver driver) {
		return driver.findElement(By.id("createTeam"));
		
}
	public static WebElement getOrganizationTextbox(WebDriver driver) {
		return driver.findElement(By.id("organization_id"));
		
}
	public static void SetOrganizationDropDown(WebDriver driver, String text)
	{
		Select dropdown = new Select(getOrganizationTextbox(driver));
		dropdown.selectByVisibleText(text); 
	}

	public static WebElement getCheckAutoJoinTeam(WebDriver driver) {
		return driver.findElement(By.id("createMember"));	
}

	public static WebElement getFillMypageTitle(WebDriver driver) {
		return driver.findElement(By.id("personalTitle"));	
}
	
	public static WebElement getFillMypageContent(WebDriver driver) {
		return driver.findElement(By.id("personalContent"));	
}
	public static WebElement getPersonalGoal(WebDriver driver) {
		return driver.findElement(By.id("personalFormatGoal"));
}
}	
