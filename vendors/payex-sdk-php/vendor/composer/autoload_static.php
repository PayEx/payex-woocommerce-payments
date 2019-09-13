<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39a9de76c892767e4df5fb31b5a9e371
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PayEx\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PayEx\\' => 
        array (
            0 => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx',
        ),
    );

    public static $classMap = array (
        'PayEx\\Api\\Client' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Client.php',
        'PayEx\\Api\\Client\\Client' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Client/Client.php',
        'PayEx\\Api\\Client\\Exception' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Client/Exception.php',
        'PayEx\\Api\\Client\\Resource\\Client' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Client/Resource/Client.php',
        'PayEx\\Api\\Client\\Resource\\Data\\ClientInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Client/Resource/Data/ClientInterface.php',
        'PayEx\\Api\\Exception' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Exception.php',
        'PayEx\\Api\\Response' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Response.php',
        'PayEx\\Api\\Service\\Consumer\\Request\\GetBillingDetails' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Request/GetBillingDetails.php',
        'PayEx\\Api\\Service\\Consumer\\Request\\GetShippingDetails' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Request/GetShippingDetails.php',
        'PayEx\\Api\\Service\\Consumer\\Request\\InitiateConsumerSession' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Request/InitiateConsumerSession.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Consumer' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Consumer.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\ConsumerAddress' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/ConsumerAddress.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\ConsumerNationalIdentifier' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/ConsumerNationalIdentifier.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Data\\ConsumerAddressInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Data/ConsumerAddressInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Data\\ConsumerInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Data/ConsumerInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Data\\ConsumerNationalIdentifierInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Data/ConsumerNationalIdentifierInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Request\\Data\\InitiateConsumerSessionInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Request/Data/InitiateConsumerSessionInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Request\\InitiateConsumerSession' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Request/InitiateConsumerSession.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\Data\\GetBillingDetailsInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/Data/GetBillingDetailsInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\Data\\GetShippingDetailsInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/Data/GetShippingDetailsInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\Data\\InitiateConsumerSessionInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/Data/InitiateConsumerSessionInterface.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\GetBillingDetails' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/GetBillingDetails.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\GetShippingDetails' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/GetShippingDetails.php',
        'PayEx\\Api\\Service\\Consumer\\Resource\\Response\\InitiateConsumerSession' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Consumer/Resource/Response/InitiateConsumerSession.php',
        'PayEx\\Api\\Service\\Data\\RequestInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Data/RequestInterface.php',
        'PayEx\\Api\\Service\\Data\\ResourceInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Data/ResourceInterface.php',
        'PayEx\\Api\\Service\\Data\\ResponseInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Data/ResponseInterface.php',
        'PayEx\\Api\\Service\\Payment\\Request\\Payments' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Request/Payments.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Collection\\Item\\Data\\PaymentListItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Collection/Item/Data/PaymentListItemInterface.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Collection\\Item\\PaymentListItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Collection/Item/PaymentListItem.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Collection\\PaymentListCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Collection/PaymentListCollection.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Data\\PaymentorderPaymentsInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Data/PaymentorderPaymentsInterface.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\PaymentorderPayments' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/PaymentorderPayments.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Response\\Data\\PaymentsInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Response/Data/PaymentsInterface.php',
        'PayEx\\Api\\Service\\Payment\\Resource\\Response\\Payments' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Payment/Resource/Response/Payments.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\CurrentPayment' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/CurrentPayment.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\GetPaymentorder' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/GetPaymentorder.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\Purchase' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/Purchase.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\Recur' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/Recur.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\UpdateOrder' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/UpdateOrder.php',
        'PayEx\\Api\\Service\\Paymentorder\\Request\\Verify' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Request/Verify.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Collection\\Item\\Data\\PaymentorderItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Collection/Item/Data/PaymentorderItemInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Collection\\Item\\PaymentorderItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Collection/Item/PaymentorderItem.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Collection\\ItemsCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Collection/ItemsCollection.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentObjectInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentObjectInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderCampaignInvoiceInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderCampaignInvoiceInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderCreditCardInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderCreditCardInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderInvoiceInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderInvoiceInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderMetadataInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderMetadataInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderObjectInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderObjectInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderPayeeInfoInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderPayeeInfoInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderPayerInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderPayerInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderSwishInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderSwishInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Data\\PaymentorderUrlInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Data/PaymentorderUrlInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentObject' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentObject.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderCampaignInvoice' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderCampaignInvoice.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderCreditCard' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderCreditCard.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderInvoice' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderInvoice.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderMetadata' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderMetadata.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderObject' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderObject.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderPayeeInfo' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderPayeeInfo.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderPayer' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderPayer.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderSwish' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderSwish.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\PaymentorderUrl' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/PaymentorderUrl.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Request\\Data\\PaymentorderInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Request/Data/PaymentorderInterface.php',
        'PayEx\\Api\\Service\\Paymentorder\\Resource\\Request\\Paymentorder' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Paymentorder/Resource/Request/Paymentorder.php',
        'PayEx\\Api\\Service\\Request' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Request.php',
        'PayEx\\Api\\Service\\Resource' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource.php',
        'PayEx\\Api\\Service\\ResourceFactory' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/ResourceFactory.php',
        'PayEx\\Api\\Service\\Resource\\Collection\\Item\\Data\\OperationsItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Collection/Item/Data/OperationsItemInterface.php',
        'PayEx\\Api\\Service\\Resource\\Collection\\Item\\OperationsItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Collection/Item/OperationsItem.php',
        'PayEx\\Api\\Service\\Resource\\Collection\\OperationsCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Collection/OperationsCollection.php',
        'PayEx\\Api\\Service\\Resource\\Data\\RequestInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Data/RequestInterface.php',
        'PayEx\\Api\\Service\\Resource\\Data\\ResponseInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Data/ResponseInterface.php',
        'PayEx\\Api\\Service\\Resource\\Request' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Request.php',
        'PayEx\\Api\\Service\\Resource\\Response' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Resource/Response.php',
        'PayEx\\Api\\Service\\Response' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Response.php',
        'PayEx\\Api\\Service\\Transaction\\Request\\TransactionCancel' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Request/TransactionCancel.php',
        'PayEx\\Api\\Service\\Transaction\\Request\\TransactionCapture' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Request/TransactionCapture.php',
        'PayEx\\Api\\Service\\Transaction\\Request\\TransactionReversal' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Request/TransactionReversal.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\ItemDescriptionCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/ItemDescriptionCollection.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\Item\\Data\\DescriptionItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/Item/Data/DescriptionItemInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\Item\\Data\\VatSummaryItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/Item/Data/VatSummaryItemInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\Item\\DescriptionItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/Item/DescriptionItem.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\Item\\VatSummaryItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/Item/VatSummaryItem.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Collection\\VatSummaryCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Collection/VatSummaryCollection.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Request\\Data\\TransactionInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Request/Data/TransactionInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Request\\Data\\TransactionObjectInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Request/Data/TransactionObjectInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Request\\Transaction' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Request/Transaction.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Request\\TransactionObject' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Request/TransactionObject.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Cancellation' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Cancellation.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Capture' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Capture.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\CancellationInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/CancellationInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\CaptureInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/CaptureInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\ReversalInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/ReversalInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\TransactionCancelInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/TransactionCancelInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\TransactionCaptureInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/TransactionCaptureInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\TransactionInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/TransactionInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Data\\TransactionReversalInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Data/TransactionReversalInterface.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Reversal' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Reversal.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\Transaction' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/Transaction.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\TransactionCancel' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/TransactionCancel.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\TransactionCapture' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/TransactionCapture.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\Response\\TransactionReversal' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/Response/TransactionReversal.php',
        'PayEx\\Api\\Service\\Transaction\\Resource\\TransactionTrait' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Api/Service/Transaction/Resource/TransactionTrait.php',
        'PayEx\\Framework\\AbstractDataTransferObject' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/AbstractDataTransferObject.php',
        'PayEx\\Framework\\AbstractSimpleDataObject' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/AbstractSimpleDataObject.php',
        'PayEx\\Framework\\DataObjectCollection' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/DataObjectCollection.php',
        'PayEx\\Framework\\DataObjectCollectionItem' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/DataObjectCollectionItem.php',
        'PayEx\\Framework\\DataObjectHelper' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/DataObjectHelper.php',
        'PayEx\\Framework\\Data\\DataObjectCollectionInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/Data/DataObjectCollectionInterface.php',
        'PayEx\\Framework\\Data\\DataObjectCollectionItemInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/Data/DataObjectCollectionItemInterface.php',
        'PayEx\\Framework\\Data\\DataTransferObjectInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/Data/DataTransferObjectInterface.php',
        'PayEx\\Framework\\Data\\SimpleDataObjectInterface' => __DIR__ . '/..' . '/payex/payex-sdk-php/src/PayEx/Framework/Data/SimpleDataObjectInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39a9de76c892767e4df5fb31b5a9e371::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39a9de76c892767e4df5fb31b5a9e371::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39a9de76c892767e4df5fb31b5a9e371::$classMap;

        }, null, ClassLoader::class);
    }
}
