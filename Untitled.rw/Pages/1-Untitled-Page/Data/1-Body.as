bplist00���X$versionX$objectsY$archiverT$top ���&$123456BEHLTUX]`cotx|�����������U$null�	
XNSString_NSAttributeInfo\NSAttributesV$class��#��%�YNS.string�_�


<pre  class="brush: java">
public class InitMicHandler<T extends InitMicHandler.OnInitMicInterface> extends Handler {
    private final WeakReference<T> mTipsViewReference;

    InitMicHandler(T t) {
        mTipsViewReference = new WeakReference<T>(t);
    }

    @Override
    public void handleMessage(Message msg) {
        super.handleMessage(msg);
        final T theView = (T) mTipsViewReference.get();
        if (theView == null) {
            return;
        }
        switch (msg.what) {
            case HANDLER_MSG_MIC_START_INIT:
                break;
            case HANDLER_MSG_MIC_INIT_RESULT:
                
                break;
            default:
                break;
        }
    }
}
<pre>�Z$classnameX$classes_NSMutableString�XNSStringXNSObject�#ZNS.objects� !"�����"�%&+0WNS.keys�'()*����	�,-./�
����ZNSLigature_NSParagraphStyleVNSFontWNSColor �789:;<=>?@<ZNSTabStops]NSLineSpacing_NSWritingDirection_NSDefaultTabInterval[NSTextLists�#?�      �#@<      ��CD���FGWNSArray�F�IJ_NSMutableParagraphStyle�IK_NSParagraphStyle�MNOPQRSVNSSizeXNSfFlagsVNSName#@&      ��]Menlo-Regular�VWVNSFont�V�YZ[>\UNSRGB\NSColorSpaceO'0.6666666667 0.05098039216 0.568627451 ��^_WNSColor�^�ab\NSDictionary�a�%di0�'()*����	�,k./�
�����7:;p?r<��#@:s33333��uD�v���yz{ZNSLocation�#@:s33333�}~YNSTextTab�}�%��0�*()�	�����������YZ�>\O'0.2078431373 0.2078431373 0.2078431373 ��78:;<=?@<����MNO�Q�S#@(      ��YHelvetica�%��0�*()�	��������� ��MNO�Q�S�!�_PingFangSC-Regular���^NSMutableArray��Fҧ��WNS.dataK ��$���]NSMutableData���VNSData���_NSAttributedString��_NSAttributedString_NSKeyedArchiverѴ�Troot�    # - 2 7 ` f o x � � � � � � � � � �������������������
$7>FHU`n������������������'.79;=KPWZagt������������������������ 	&+58?CEGIMOQSU\��������������������������)+0>BINcf{���             �              �