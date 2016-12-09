package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class LoginScreen extends BaseScreen{
	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/login";
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
	
	public static WebElement getErrorMessage(WebDriver driver) {
		return driver.findElement(By.xpath("//span[@class='help-block']"));
	}

	public static WebElement getNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_loginemail"));
	}
}