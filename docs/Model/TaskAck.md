# # TaskAck

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Task processing status | [optional]
**message** | **string** | Optional message to record and display in Kimono. | [optional]
**error** | [**\Kimono\Model\ErrorType**](ErrorType.md) |  | [optional]
**params** | **array<string,string>** | Optional key/value pairs to record in Kimono. Some Task types prescribe parameters be returned when a Task is acknowledged. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
