-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: LARAVEL
-- ------------------------------------------------------
-- Server version	10.1.48-MariaDB-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aws`
--
CREATE DATABASE IF NOT EXISTS `LARAVEL` COLLATE 'utf8_general_ci' ;
GRANT ALL ON `LARAVEL`.* TO 'default'@'%' ;
CREATE USER 'LARAVELwilliam'@'%' IDENTIFIED BY 'laravel';
GRANT ALL ON `LARAVEL`.* TO 'LARAVELwilliam'@'%';
use LARAVEL;
DROP TABLE IF EXISTS `aws`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aws` (
  `easyuse` char(255) DEFAULT NULL,
  `flexible` char(255) DEFAULT NULL,
  `Cheap` char(255) DEFAULT NULL,
  `trusty` char(255) DEFAULT NULL,
  `efficacy` char(255) DEFAULT NULL,
  `Security` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aws`
--

LOCK TABLES `aws` WRITE;
/*!40000 ALTER TABLE `aws` DISABLE KEYS */;
INSERT INTO `aws` VALUES ('AWS 是專為使應用程式供應商、ISV 和一般廠商能夠快速安全地託管應用程式而設計的，無論是託管現有的應用程式或是新的 SaaS 應用程式。您可以使用 AWS 管理主控台或有詳細說明文件的 Web 服務 API 存取 AWS 的應用程式託管平台。','AWS 讓您能夠選擇操作系統、程式設計語言、Web 應用程式平台、資料庫和其他所需的服務。使用 AWS，您可以在虛擬環境中載入應用程式所需的軟體和服務。這可以免除現有應用程式的遷移程序，同時保留建置新解決方案的選項。','您只需為所使用的運算能力、儲存和其他資源付費，無需簽訂長期合約或前期承諾。若要深入了解 AWS 與其他託管替代選項的成本比較，請參閱 AWS 成本中心。','使用 AWS 就能充分利用可擴展、可靠和安全的全球運算基礎設施，這是 Amazon.com 經過十幾年精心研發，價值數十億美元的線上商業虛擬骨幹。','使用 AWS 工具 Auto Scaling 和 Elastic Load Balancing，您可以依需要擴展和縮減應用程式。透過 Amazon 的大量基礎設施支援，您可以視需要隨時存取運算和儲存資源。','AWS 使用端對端方法來保護和增強我們的基礎設施，包含實體、操作和軟體措施。如需詳細資訊，請參閱 AWS Security Center。');
/*!40000 ALTER TABLE `aws` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `azures`
--

DROP TABLE IF EXISTS `azures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `azures` (
  `tool` char(100) DEFAULT NULL,
  `setting` char(100) DEFAULT NULL,
  `OPsource` char(100) DEFAULT NULL,
  `extra` char(100) DEFAULT NULL,
  `backup` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `azures`
--

LOCK TABLES `azures` WRITE;
/*!40000 ALTER TABLE `azures` DISABLE KEYS */;
INSERT INTO `azures` VALUES ('Azure可以快速開發電商網站所需功能，包含購物車、訂單管理、會員系統等。善用內建Azure網站分析，分析客戶購物行為。','Azure能建置開發測試環境或迅速復原環境，為程式開發建立Windows或Linux測試環境、支援常見程式、隨時調整測試數值。可線上管理專案，了解團隊狀況，隨時彈性擴充/縮減。','支援多版本PHP、MySQL。可直接將網站程式、靜態網頁佈署至Azure，不再需要顧慮底層作業系統與伺服器建置，也不必操心資源配置、設定，可以專注於程式撰寫與資料庫連結。','利用Azure可以自由選擇作業系統，以任何程式語言開發。數分鐘內啟動主機，立即調整規格或擴充數量，不必長時間的建置流程。','Azure整合現有IT，讓儲存架構能最有效益，確保資料能順利備份與還原，而其成本也比自行部署來得低許多。');
/*!40000 ALTER TABLE `azures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gcp`
--

DROP TABLE IF EXISTS `gcp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gcp` (
  `example` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gcp`
--

LOCK TABLES `gcp` WRITE;
/*!40000 ALTER TABLE `gcp` DISABLE KEYS */;
INSERT INTO `gcp` VALUES ('我們曾經服務過華人直播市場的領導品牌 — 17LIVE，提供雲端平台諮詢服務與技術支援，讓 17LIVE 工程師免去眾多管理的麻煩與困擾；國內知名 friDay 購物平台（遠時數位科技），協助他們加強資料蒐集與分析功能應用，更搭配 Google Managed 服務的優勢，讓管理上更加便利；還有港台主流的一站式商務服務平臺 — SHOPLINE，透過 CloudMile 協助提供 GCP 的 Container 和Kubernetes，讓 SHOPLINE 無須顧慮程式需在特定平台或系統運作，更能專注於業'),('NBA 金州勇士隊與 Google Cloud 合作，活用 Cloud Dataflow 、BigQuery 與機器學習，智慧分析提高球隊和球員績效，同時運用 GCP 的 App Engine、Firebase 創造更多有參與感的粉絲體驗。'),('另外，領先業界的義大利銀行 Banca Mediolanum 使用 Google BigQuery 作為強大的資料庫，在社群媒體上打造自定義系列廣告。不僅在一周內即將其現有數據搬遷至 GCP，作為 Google Analytics 360 客戶，更廣泛使用 DoubleClick 和 AdWords ，這些都能與 GCP 基礎架構無縫整合。');
/*!40000 ALTER TABLE `gcp` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-09 17:05:49
