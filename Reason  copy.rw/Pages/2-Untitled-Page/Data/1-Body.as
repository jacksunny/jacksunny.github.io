bplist00���X$versionX$objectsY$archiverT$top ���!$12345=@CGMPXY\_bnq}��������U$null�	
XNSString_NSAttributeInfo\NSAttributesV$class���� �YNS.string�_�public class InitMicHandler<T extends InitMicHandler.OnInitMicInterface> extends Handler {
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

�Z$classnameX$classes_NSMutableString�XNSStringXNSObject�#ZNS.objects� !"������%&+0WNS.keys�'()*����	�,-./�
����_NSParagraphStyle_NSBackgroundColorVNSFontWNSColor�6789:;9ZNSTabStops_NSDefaultTabInterval[NSTextLists��#@<ٙ������>?���ABWNSArray�A�DE_NSMutableParagraphStyle�DF_NSParagraphStyle�HIJKLUNSRGB\NSColorSpaceO'0.9921568627 0.9647058824 0.8901960784 ��NOWNSColor�N�QRSTUVWVNSSizeXNSfFlagsVNSName#@(      ��]Menlo-Regular�Z[VNSFont�Z�HI]KLO&0.3450980392 0.431372549 0.4588235294 ��`a\NSDictionary�`�%ch0�'()*����	�,-.l�
�����HIoKLO0.5215686275 0.6 0 ��%rw0�'()*����	�xy.{������6789:�9��#@<ٙ������HI�KLO'0.9921568627 0.9647058824 0.8901960784 ��HI�KLO&0.862745098 0.1960784314 0.1843137255 ��%��0�'()*����	�xy.�������HI�KLO0.7098039216 0.537254902 0 ����^NSMutableArray��Aқ��WNS.dataOV  + 2  K   % & - ' 
    -  ?    ����]NSMutableData���VNSData���_NSAttributedString��_NSAttributedString_NSKeyedArchiverѨ�Troot�    # - 2 7 [ a j s � � � � � � � � � �glw�������������������������� (1<S_aclnstv{��������� 	$-4=?ACQV]`g��������������������������
"$+UW^����������������������QSXfjqv������             �              �