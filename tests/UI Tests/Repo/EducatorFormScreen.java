package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;



public class EducatorFormScreen extends BaseScreen{
	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/educators/interestform";
	}
	
	public static WebElement getFirstNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("first_name"));
	}
	
	public static WebElement getLastNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("last_name"));
	}
	
	public static WebElement getSchoolNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_name"));
	}
	public static WebElement getSchoolPhoneTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_phone"));
	}	
	public static WebElement getSchoolAddressTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_address"));
	}	
	public static WebElement getCityTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_city"));
	}	
	public static WebElement getStateTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_state_id"));
	}	
	public static WebElement getZipTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_zip"));
	}	
	public static WebElement getEmailTextbox(WebDriver driver) {
		return driver.findElement(By.id("email"));
	}	
	public static WebElement getGradeTextbox(WebDriver driver) {
		return driver.findElement(By.id("grade"));
	}	
	public static WebElement getProgramThemeTextbox(WebDriver driver) {
		return driver.findElement(By.id("program_theme"));
	}	
	public static WebElement getNoofclassesTextbox(WebDriver driver) {
		return driver.findElement(By.id("no_of_classes"));
	}	
	public static WebElement getNoofstudentsTextbox(WebDriver driver) {
		return driver.findElement(By.id("no_of_students_per_class"));
	}	
	public static WebElement getPlanningTimeTextbox(WebDriver driver) {
		return driver.findElement(By.id("planning_time"));
	}	
	public static WebElement getCellPhoneTextbox(WebDriver driver) {
		return driver.findElement(By.id("cell_phone"));
	}	
	public static WebElement getCommentsTextbox(WebDriver driver) {
		return driver.findElement(By.id("comments_requests"));
	}	
	public static WebElement getSaveButton(WebDriver driver) {
		return driver.findElement(By.id("save"));
	}
	
	//Keywords
	public static void SetSchoolStateDropDown(WebDriver driver, String text)
	{
		Select dropdown = new Select(getStateTextbox(driver));
		dropdown.selectByVisibleText(text);
	}
	
	//Goes in your test case
	//EducatorFormScreen.SetSchoolStateDropDown(driver, "Alaska");
}
