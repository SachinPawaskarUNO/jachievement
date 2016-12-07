package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class RegisterScreen extends BaseScreen{
	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/register";
	}
	
	public static WebElement getFirstNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_first_name"));
	}
	public static WebElement getLastNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_last_name"));
	}
	public static WebElement getEmailTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_email"));
	}
	public static WebElement getConfirmEmailTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_email2"));
	}

	public static WebElement getPasswordTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_pw1"));
	}
	public static WebElement getDisplayTextbox(WebDriver driver) {
		return driver.findElement(By.id("display_txtbox"));
	}
	public static WebElement getConfirmPasswordTextbox(WebDriver driver) {
		return driver.findElement(By.id("ja_register_pw2"));
	}
	public static WebElement getRegister(WebDriver driver) {
		return driver.findElement(By.id("ja_register_submit"));
	}
}