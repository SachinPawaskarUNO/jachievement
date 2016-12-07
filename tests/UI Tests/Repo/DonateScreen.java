package Repo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;

public class DonateScreen {
	public static String getURL() {
		return "https://www.paypal.com/us/cgi-bin/webscr?cmd=_flow&SESSION=jFo7RqJaAeFaqClnM6sqGH5fVARkZTW1G_Xnai52Qas00sawHiGn6SEQF78&dispatch=5885d80a13c0db1f8e263663d3faee8d6625bf1e8bd269586d425cc639e26c6a";
	}
	
	public static WebElement getUserManagement(WebDriver driver) {
		return driver.findElement(By.linkText("Donate to VNA"));
	}
	public static String getPath() {
		return "https://www.paypal.com/";
	}

}
