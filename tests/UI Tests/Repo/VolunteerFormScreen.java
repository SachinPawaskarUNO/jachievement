package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.support.ui.Select;



public class VolunteerFormScreen extends BaseScreen{
	
	public static String getURL() {
		return BaseScreen.getURL() + getPath();
	}
	
	public static String getPath() {
		return "/volunteers/interestform";
	}
	
	public static WebElement getCheckBox(WebDriver driver) {
		return driver.findElement(By.id("elementarySchoolProgram"));
	}
		
	public static WebElement getSchoolNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("school_preference"));
	}
	
	public static WebElement getFirstNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("first_name"));
	}
	
	public static WebElement getLastNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("last_name"));
	}
	public static WebElement getCompanyNameTextbox(WebDriver driver) {
		return driver.findElement(By.id("company_name"));
	}	
	public static WebElement getCompanyAddressTextbox(WebDriver driver) {
		return driver.findElement(By.id("company_address"));
	}	
	public static WebElement getCompanyCityTextbox(WebDriver driver) {
		return driver.findElement(By.id("company_city"));
	}	
	public static WebElement getCompanyStateDropDown(WebDriver driver) {
		return driver.findElement(By.id("company_state_id"));
	}
	public static WebElement getCompanyZipTextbox(WebDriver driver) {
		return driver.findElement(By.id("company_zip"));
	}	
	public static WebElement getCompanyPhoneTextbox(WebDriver driver) {
		return driver.findElement(By.id("company_phone"));
	}	
	public static WebElement getHomePhoneTextbox(WebDriver driver) {
		return driver.findElement(By.id("home_phone"));
	}	
	public static WebElement getHomeAdressTextbox(WebDriver driver) {
		return driver.findElement(By.id("home_address"));
	}	
	public static WebElement getCityTextbox(WebDriver driver) {
		return driver.findElement(By.id("home_city"));
	}	
	public static WebElement getHomeStateDropDown(WebDriver driver) {
		return driver.findElement(By.id("home_state_id"));
	}	
	public static WebElement getHomeZipTextbox(WebDriver driver) {
		return driver.findElement(By.id("home_zip"));
	}	
	public static WebElement getEmailTextbox(WebDriver driver) {
		return driver.findElement(By.id("email"));
	}	
	public static WebElement getModeOfContactDropDown(WebDriver driver) {
		return driver.findElement(By.id("modeOfContact"));
	}	

	public static WebElement getSaveButton(WebDriver driver) {
		return driver.findElement(By.id("save"));
	}
	
	//Keywords
	public static void SetCompanyStateDropDown(WebDriver driver, String text)
	{
		Select dropdown = new Select(getCompanyStateDropDown(driver));
		dropdown.selectByVisibleText(text);
	}
	public static void SetHomeStateDropDown(WebDriver driver, String text)
	{
		Select dropdown = new Select(getHomeStateDropDown(driver));
		dropdown.selectByVisibleText(text);
	}
	public static void SetModeOfContactDropDown(WebDriver driver, String text)
	{
		Select dropdown = new Select(getModeOfContactDropDown(driver));
		dropdown.selectByVisibleText(text);
	}
	
	//Goes in your test case
	//EducatorFormScreen.SetSchoolStateDropDown(driver, "Alaska");
	

	
}
