<?php 
namespace PrestaShop\PrestaShop\Adapter\Entity;

class Upgrader extends \Upgrader {};
class Profile extends \Profile {};
class LinkProxy extends \LinkProxy {};
class Feature extends \Feature {};
class State extends \State {};
class Carrier extends \Carrier {};
class ImageManager extends \ImageManager {};
class Tab extends \Tab {};
class Cart extends \Cart {};
class CheckoutPersonalInformationStep extends \CheckoutPersonalInformationStep {};
class CheckoutSession extends \CheckoutSession {};
class CheckoutProcess extends \CheckoutProcess {};
class DeliveryOptionsFinder extends \DeliveryOptionsFinder {};
class ConditionsToApproveFinder extends \ConditionsToApproveFinder {};
class PaymentOptionsFinder extends \PaymentOptionsFinder {};
abstract class AbstractCheckoutStep extends \AbstractCheckoutStep {};
class CheckoutDeliveryStep extends \CheckoutDeliveryStep {};
class CheckoutPaymentStep extends \CheckoutPaymentStep {};
class CartChecksum extends \CartChecksum {};
class AddressValidator extends \AddressValidator {};
class CheckoutAddressesStep extends \CheckoutAddressesStep {};
class Curve extends \Curve {};
abstract class Cache extends \Cache {};
class CacheXcache extends \CacheXcache {};
class CacheMemcache extends \CacheMemcache {};
class CacheMemcached extends \CacheMemcached {};
class CacheApc extends \CacheApc {};
class StylesheetManager extends \StylesheetManager {};
class CccReducer extends \CccReducer {};
class JavascriptManager extends \JavascriptManager {};
abstract class AbstractAssetManager extends \AbstractAssetManager {};
class CssMinifier extends \CssMinifier {};
class JsMinifier extends \JsMinifier {};
class Group extends \Group {};
class CustomizationField extends \CustomizationField {};
class Customer extends \Customer {};
class Tax extends \Tax {};
class TaxCalculator extends \TaxCalculator {};
class TaxManagerFactory extends \TaxManagerFactory {};
class TaxConfiguration extends \TaxConfiguration {};
class TaxRule extends \TaxRule {};
class TaxRulesTaxManager extends \TaxRulesTaxManager {};
abstract class TaxManagerModule extends \TaxManagerModule {};
class TaxRulesGroup extends \TaxRulesGroup {};
class SmartyCustom extends \SmartyCustom {};
class SmartyDevTemplate extends \SmartyDevTemplate {};
class SmartyResourceParent extends \SmartyResourceParent {};
class TemplateFinder extends \TemplateFinder {};
class SmartyResourceModule extends \SmartyResourceModule {};
class SmartyCustomTemplate extends \SmartyCustomTemplate {};
class PrestaShopCollection extends \PrestaShopCollection {};
class Mail extends \Mail {};
class SearchEngine extends \SearchEngine {};
class Contact extends \Contact {};
class Store extends \Store {};
class Image extends \Image {};
class Configuration extends \Configuration {};
class HelperImageUploader extends \HelperImageUploader {};
class HelperKpi extends \HelperKpi {};
class HelperOptions extends \HelperOptions {};
class HelperForm extends \HelperForm {};
class HelperTreeCategories extends \HelperTreeCategories {};
class Helper extends \Helper {};
class HelperUploader extends \HelperUploader {};
class HelperKpiRow extends \HelperKpiRow {};
class HelperView extends \HelperView {};
class HelperShop extends \HelperShop {};
class HelperTreeShops extends \HelperTreeShops {};
class HelperCalendar extends \HelperCalendar {};
class HelperList extends \HelperList {};
abstract class HTMLTemplate extends \HTMLTemplate {};
class PDF extends \PDF {};
class PDFGenerator extends \PDFGenerator {};
class HTMLTemplateOrderReturn extends \HTMLTemplateOrderReturn {};
class HTMLTemplateDeliverySlip extends \HTMLTemplateDeliverySlip {};
class HTMLTemplateSupplyOrderForm extends \HTMLTemplateSupplyOrderForm {};
class HTMLTemplateOrderSlip extends \HTMLTemplateOrderSlip {};
class HTMLTemplateInvoice extends \HTMLTemplateInvoice {};
class CartRule extends \CartRule {};
class Attribute extends \Attribute {};
class Chart extends \Chart {};
class Category extends \Category {};
class PrestaShopException extends \PrestaShopException {};
class PrestaShopObjectNotFoundException extends \PrestaShopObjectNotFoundException {};
class PrestaShopPaymentException extends \PrestaShopPaymentException {};
class PrestaShopDatabaseException extends \PrestaShopDatabaseException {};
class PrestaShopModuleException extends \PrestaShopModuleException {};
abstract class Controller extends \Controller {};
class FrontController extends \FrontController {};
abstract class ProductListingFrontController extends \ProductListingFrontController {};
class AdminController extends \AdminController {};
class ModuleFrontController extends \ModuleFrontController {};
abstract class ModuleAdminController extends \ModuleAdminController {};
abstract class ProductPresentingFrontController extends \ProductPresentingFrontController {};
class Hook extends \Hook {};
class CMS extends \CMS {};
class Translate extends \Translate {};
class Dispatcher extends \Dispatcher {};
class RangeWeight extends \RangeWeight {};
class RangePrice extends \RangePrice {};
class ProductSale extends \ProductSale {};
class Guest extends \Guest {};
class Customization extends \Customization {};
class Validate extends \Validate {};
class LocalizationPack extends \LocalizationPack {};
class Employee extends \Employee {};
class GroupLang extends \GroupLang {};
class CmsCategoryLang extends \CmsCategoryLang {};
class CarrierLang extends \CarrierLang {};
class QuickAccessLang extends \QuickAccessLang {};
class OrderMessageLang extends \OrderMessageLang {};
class OrderStateLang extends \OrderStateLang {};
class MetaLang extends \MetaLang {};
class ThemeLang extends \ThemeLang {};
class ContactLang extends \ContactLang {};
class FeatureLang extends \FeatureLang {};
class ProfileLang extends \ProfileLang {};
class DataLang extends \DataLang {};
class OrderReturnStateLang extends \OrderReturnStateLang {};
class FeatureValueLang extends \FeatureValueLang {};
class CategoryLang extends \CategoryLang {};
class ConfigurationLang extends \ConfigurationLang {};
class GenderLang extends \GenderLang {};
class AttributeLang extends \AttributeLang {};
class SupplyOrderStateLang extends \SupplyOrderStateLang {};
class AttributeGroupLang extends \AttributeGroupLang {};
class RiskLang extends \RiskLang {};
class TabLang extends \TabLang {};
class StockMvtReasonLang extends \StockMvtReasonLang {};
class PhpEncryptionEngine extends \PhpEncryptionEngine {};
class Windows extends \Windows {};
class ProductSupplier extends \ProductSupplier {};
class ConnectionsSource extends \ConnectionsSource {};
class FeatureValue extends \FeatureValue {};
class Link extends \Link {};
class ShopUrl extends \ShopUrl {};
class Shop extends \Shop {};
class ShopGroup extends \ShopGroup {};
class GroupReduction extends \GroupReduction {};
abstract class PaymentModule extends \PaymentModule {};
class Tools extends \Tools {};
class AttributeGroup extends \AttributeGroup {};
class SpecificPrice extends \SpecificPrice {};
class Media extends \Media {};
class Meta extends \Meta {};
class WebserviceSpecificManagementSearch extends \WebserviceSpecificManagementSearch {};
class WebserviceKey extends \WebserviceKey {};
class WebserviceException extends \WebserviceException {};
class WebserviceRequest extends \WebserviceRequest {};
class WebserviceOutputJSON extends \WebserviceOutputJSON {};
class WebserviceSpecificManagementImages extends \WebserviceSpecificManagementImages {};
class WebserviceOutputXML extends \WebserviceOutputXML {};
class WebserviceOutputBuilder extends \WebserviceOutputBuilder {};
class CSV extends \CSV {};
class CustomerMessage extends \CustomerMessage {};
class PrestaShopLogger extends \PrestaShopLogger {};
class Access extends \Access {};
class AddressChecksum extends \AddressChecksum {};
class CustomerLoginForm extends \CustomerLoginForm {};
class CustomerFormatter extends \CustomerFormatter {};
class FormField extends \FormField {};
class CustomerPersister extends \CustomerPersister {};
class CustomerAddressForm extends \CustomerAddressForm {};
abstract class AbstractForm extends \AbstractForm {};
class CustomerLoginFormatter extends \CustomerLoginFormatter {};
class CustomerForm extends \CustomerForm {};
class CustomerAddressFormatter extends \CustomerAddressFormatter {};
class CustomerAddressPersister extends \CustomerAddressPersister {};
class RequestSql extends \RequestSql {};
class StockMvtReason extends \StockMvtReason {};
class Stock extends \Stock {};
class WarehouseProductLocation extends \WarehouseProductLocation {};
class StockManagerFactory extends \StockManagerFactory {};
class StockMvtWS extends \StockMvtWS {};
abstract class StockManagerModule extends \StockManagerModule {};
class SupplyOrderState extends \SupplyOrderState {};
class Warehouse extends \Warehouse {};
class StockMvt extends \StockMvt {};
class StockAvailable extends \StockAvailable {};
class SupplyOrderReceiptHistory extends \SupplyOrderReceiptHistory {};
class SupplyOrderDetail extends \SupplyOrderDetail {};
class SupplyOrderHistory extends \SupplyOrderHistory {};
class SupplyOrder extends \SupplyOrder {};
class StockManager extends \StockManager {};
class Attachment extends \Attachment {};
class QuickAccess extends \QuickAccess {};
class WarehouseAddress extends \WarehouseAddress {};
class QqUploadedFileXhr extends \QqUploadedFileXhr {};
class Supplier extends \Supplier {};
class ImageType extends \ImageType {};
class Pack extends \Pack {};
class AddressFormat extends \AddressFormat {};
class Manufacturer extends \Manufacturer {};
class ManufacturerAddress extends \ManufacturerAddress {};
class Language extends \Language {};
class Risk extends \Risk {};
class PrestaShopBackup extends \PrestaShopBackup {};
class Tag extends \Tag {};
class ValidateConstraintTranslator extends \ValidateConstraintTranslator {};
class CustomerThread extends \CustomerThread {};
class OrderCarrier extends \OrderCarrier {};
class Order extends \Order {};
class OrderMessage extends \OrderMessage {};
class OrderCartRule extends \OrderCartRule {};
class OrderDiscount extends \OrderDiscount {};
class OrderPayment extends \OrderPayment {};
class OrderState extends \OrderState {};
class OrderReturn extends \OrderReturn {};
class OrderInvoice extends \OrderInvoice {};
class OrderSlip extends \OrderSlip {};
class OrderDetail extends \OrderDetail {};
class OrderReturnState extends \OrderReturnState {};
class OrderHistory extends \OrderHistory {};
class PhpEncryptionLegacyEngine extends \PhpEncryptionLegacyEngine {};
class CMSCategory extends \CMSCategory {};
class PhpEncryption extends \PhpEncryption {};
class ProductAssembler extends \ProductAssembler {};
class SpecificPriceRule extends \SpecificPriceRule {};
class Product extends \Product {};
class Zone extends \Zone {};
class ProductDownload extends \ProductDownload {};
class ConfigurationKPI extends \ConfigurationKPI {};
class SupplierAddress extends \SupplierAddress {};
class Referrer extends \Referrer {};
abstract class ModuleGridEngine extends \ModuleGridEngine {};
abstract class Module extends \Module {};
abstract class CarrierModule extends \CarrierModule {};
abstract class ModuleGrid extends \ModuleGrid {};
abstract class ModuleGraphEngine extends \ModuleGraphEngine {};
abstract class ModuleGraph extends \ModuleGraph {};
class Cookie extends \Cookie {};
class ConfigurationTest extends \ConfigurationTest {};
class Context extends \Context {};
class Tree extends \Tree {};
class TreeToolbar extends \TreeToolbar {};
class TreeToolbarSearch extends \TreeToolbarSearch {};
class TreeToolbarLink extends \TreeToolbarLink {};
class TreeToolbarSearchCategories extends \TreeToolbarSearchCategories {};
abstract class TreeToolbarButton extends \TreeToolbarButton {};
class TranslatedConfiguration extends \TranslatedConfiguration {};
class CustomerAddress extends \CustomerAddress {};
class CMSRole extends \CMSRole {};
class Address extends \Address {};
abstract class AbstractLogger extends \AbstractLogger {};
class FileLogger extends \FileLogger {};
class DateRange extends \DateRange {};
class FileUploader extends \FileUploader {};
class Alias extends \Alias {};
class Page extends \Page {};
class DbQuery extends \DbQuery {};
class DbPDO extends \DbPDO {};
abstract class Db extends \Db {};
class DbMySQLi extends \DbMySQLi {};
class Country extends \Country {};
class QqUploadedFileForm extends \QqUploadedFileForm {};
class Uploader extends \Uploader {};
class Delivery extends \Delivery {};
class Currency extends \Currency {};
class Combination extends \Combination {};
class Notification extends \Notification {};
class Message extends \Message {};
class Gender extends \Gender {};
class ProductPresenterFactory extends \ProductPresenterFactory {};
abstract class ObjectModel extends \ObjectModel {};
class Connection extends \Connection {};
class Search extends \Search {};
